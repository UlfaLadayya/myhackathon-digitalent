<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TextToSpeechController extends Controller
{
    private $subscriptionKey;
    private $region;

    public function index(){
        return view('tts');
    }
    public function texttospeech(Request $request){
        $this->subscriptionKey = env('AZURE_SPEECH_KEY');
        $this->region = env('AZURE_SPEECH_REGION');

        $request->validate(['text' => 'required|string']);

        $text = $request->input('text');
        // $text = "Halo, ini suara dari Azure.";
        $endpoint = "https://{$this->region}.tts.speech.microsoft.com/cognitiveservices/v1";

        $accessTokenUrl = 
        //"https://$region.api.cognitive.microsoft.com/";
        "https://{$this->region}.api.cognitive.microsoft.com/sts/v1.0/issuetoken";

        // Ambil Access Token
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $accessTokenUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Ocp-Apim-Subscription-Key: $this->subscriptionKey",
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $accessToken = curl_exec($ch);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        curl_close($ch);
        if (!$accessToken || strpos($accessToken, 'error') !== false || strlen($accessToken) < 10) {
            echo "Access token kosong atau tidak valid:<br><pre>" . htmlentities($accessToken) . "</pre>";
            exit;
        }

        // if (strpos($contentType, 'audio') === false) {
        //     echo "Respon bukan audio, Content-Type: $contentType<br>";
        //     echo "<pre>" . htmlentities(substr($response, 0, 1000)) . "</pre>";
        //     exit;
        // }

        // Kirim Text and terima Audio
        $ssml = "<speak version='1.0' xml:lang='id-ID'>
            <voice name='id-ID-ArdiNeural'>$text</voice>
        </speak>";
        //id-ID-GadisNeural
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $ssml);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $accessToken",
            "Content-Type: application/ssml+xml",
            "X-Microsoft-OutputFormat: audio-16khz-128kbitrate-mono-mp3",
            "User-Agent: WebsiteLaravel"
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); // ini penting
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode == 200) {
    // Cek apakah $response adalah file audio (bukan HTML/JSON error)
    if (strpos($response, '<html') !== false || strpos($response, '{') !== false) {
        echo "Respons bukan audio! Cek isi respons:<br><pre>" . htmlentities(substr($response, 0, 500)) . "</pre>";
        exit;
    }

            if ($httpCode == 200) {
            file_put_contents("output.mp3", $response);
            echo "<audio controls autoplay><source src='output.mp3' type='audio/mpeg'></audio>";
        } else {
            echo "TTS gagal. HTTP Code: $httpCode";
        }
        return response($response, 200)
           ->header('Content-Type', 'audio/mpeg');

//     // Path ke folder public/audio
//     $audioDir = public_path('audio');

//     // Buat folder 'audio' jika belum ada
//     if (!file_exists($audioDir)) {
//         mkdir($audioDir, 0755, true);
//     }

//     // Buat nama file unik (berdasarkan waktu)
//     $filename = 'tts_' . time() . '.mp3';
//     $filePath = $audioDir . '/' . $filename;

//     // Simpan file audio
//     $saved = file_put_contents($filePath, $response);

//     if (!$saved) {
//         echo "Gagal menyimpan file audio!";
//         exit;
//     }

//     if (filesize($filePath) == 0) {
//         echo "File audio yang disimpan kosong!";
//         exit;
//     }

//     // Hapus file audio lama (lebih dari 1 jam)
//     $files = glob($audioDir . '/tts_*.mp3');
//     $expireTime = time() - 3600; // 1 jam lalu

//     foreach ($files as $file) {
//         if (filemtime($file) < $expireTime) {
//             unlink($file); // hapus
//         }
//     }

//     // Tampilkan link cek file
//     echo "File audio berhasil dibuat: <a href='/audio/$filename' target='_blank'>$filename</a><br>";

//     // Tampilkan player audio
//     echo "<audio controls autoplay>
//             <source src='/audio/$filename' type='audio/mpeg'>
//             Your browser does not support the audio element.
//           </audio>";
// } else {
//     // Jika gagal
//     echo "TTS gagal. HTTP Code: $httpCode";
//     echo "Response: <pre>" . htmlentities(substr($response, 0, 500)) . "</pre>";
// }

        //OLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
        // if ($httpCode == 200) {

        //     // Cek apakah $response adalah file audio (bukan HTML/JSON error)
        //     if (strpos($response, '<html') !== false || strpos($response, '{') !== false) {
        //         echo "Respons bukan audio! Cek isi respons:<br><pre>" . htmlentities(substr($response, 0, 500)) . "</pre>";
        //         exit;
        //     }
        //     // Path ke folder public/audio
        //     $audioDir = public_path('audio');

        //     // Buat folder 'audio' jika belum ada
        //     if (!file_exists($audioDir)) {
        //         mkdir($audioDir, 0755, true);
        //     }

        //     // Buat nama file unik (berdasarkan waktu)
        //     $filename = 'tts_' . time() . '.mp3';
        //     $filePath = $audioDir . '/' . $filename;

        //     // Simpan file audio
        //     file_put_contents($filePath, $response);

        //     // 🔥 Hapus file audio lama (lebih dari 1 jam)
        //     $files = glob($audioDir . '/tts_*.mp3');
        //     $expireTime = time() - 3600; // 1 jam lalu

        //     foreach ($files as $file) {
        //         if (filemtime($file) < $expireTime) {
        //             unlink($file); // hapus
        //         }
        //     }

        //     // Tampilkan player audio
        //     echo "<audio controls autoplay>
        //             <source src='/audio/$filename' type='audio/mpeg'>
        //             Your browser does not support the audio element.
        //         </audio>";
        // } else {
        //     // Jika gagal
        //     echo "TTS gagal. HTTP Code: $httpCode";
        //     echo "Response: <pre>" . htmlentities(substr($response, 0, 500)) . "</pre>";
        // }



        // if ($httpCode == 200) {
        //     file_put_contents("output.mp3", $response);
        //     echo "<audio controls autoplay><source src='output.mp3' type='audio/mpeg'></audio>";
        // } else {
        //     echo "TTS gagal. HTTP Code: $httpCode";
        // }
        // return response($response, 200)
        //    ->header('Content-Type', 'audio/mpeg');
    }

}

}
    // if ($httpCode == 200 && $response !== false) {
    //     return response($response, 200)
    //         ->header('Content-Type', 'audio/mpeg')
    //         ->header('Content-Length', strlen($response));
    // } else {
    //     return response("TTS gagal. HTTP Code: $httpCode", $httpCode);
    // }
    //audio-16khz-128kbitrate-mono-mp3
    //audio-24khz-48kbitrate-mono-mp3
    //     try {
    //     $text = $request->input('text');
    //     $apiKey = env('AZURE_SPEECH_KEY');
    //     $region = env('AZURE_SPEECH_REGION');
    //     $endpoint = "https://eastus2.api.cognitive.microsoft.com/";

    //     $headers = [
    //       'Ocp-Apim-Subscription-Key' => $apiKey,
    //       'Content-Type' => 'application/ssml+xml',
    //       'X-Microsoft-OutputFormat' => 'audio-24khz-48kbitrate-mono-mp3',
    //       'User-Agent' => 'WebLaravel'  
    //     ];

    //     $ssml = <<<XML

    //     <speak version='1.0' xml:lang='id-ID'>
    //         <voice xml:lang='id-ID' xml:gender='Female' name='id-ID-GadisNeural'>
    //             $text
    //         </voice>
    //     </speak> 
    //     XML;

    //     $response = Http::withHeaders($headers)
    //     ->withBody($ssml, 'application/ssml+xml')
    //     ->post($endpoint);
        
    //     if ($response->successful()) {
    //         // Simpan file audio ke penyimpanan lokal
    //         $filename = 'tts_output_' . time() . '.mp3';
    //         file_put_contents(storage_path("app/public/$filename"), $response->body());
    //         return response()->json([
    //             'message' => 'Sukses',
    //             'audio_url' => asset("storage/$filename")
    //         ]);
    //     }
    //     return response()->json([
    //         'error' => "Gagal memanggil API",
    //         'details' => $response->body()
    //     ], 
    //         500
    //     );
    // } catch (\Throwable $e) {
    //     return response()->json([
    //         'error' => $e->getMessage(),
    //         'trace' => $e->getTraceAsString(),
    //     ], 500);
    // }
    // }
