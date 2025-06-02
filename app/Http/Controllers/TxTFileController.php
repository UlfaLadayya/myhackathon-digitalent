<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TxTFileController extends Controller
{
    private $subscriptionKey;
    private $region;

    public function index(){
        return view('tts');
    }

    // public function play(){
    //     $path = public_path('output.mp3');

    //     if (!file_exists($path)) {
    //         abort(404, 'Audio file not found.');
    //     }

    //     return response()->file($path, [
    //         'Content-Type' => 'audio/mpeg'
    //     ]);
    // }

    // public function play($filename)
    // {
    //     $safeFilename = basename($filename); // amankan dari path traversal
    //     $path = public_path($safeFilename);

    //     if (!file_exists($path)) {
    //         abort(404, 'Audio file not found.');
    //     }

    //     return response()->file($path, [
    //         'Content-Type' => 'audio/mpeg'
    //     ]);
    // }

    // public function play($filename)
    // {
    //     $safeFilename = basename($filename); // hindari ../ eksploitasi
    //     $path = public_path($safeFilename);

    //     if (!file_exists($path)) {
    //         abort(404, 'File tidak ditemukan');
    //     }

    //     return response()->file($path, [
    //         'Content-Type' => 'audio/mpeg'
    //     ]);
    // }

    // public function play()
    // {
    //     $path = public_path('output.mp3'); // tetap hardcoded

    //     if (!file_exists($path)) {
    //         abort(404, 'Audio file not found.');
    //     }

    //     return response()->file($path, [
    //         'Content-Type' => 'audio/mpeg'
    //     ]);
    // }

    
    // public function generate(Request $request)
    // {
    //     $text = $request->input('text');

    //     if (empty($text)) {
    //         return response()->json(['error' => 'Text is required'], 400);
    //     }

    //     // 1. Nama file unik
    //     $filename = 'output_' . uniqid() . '.mp3';

    //     // 2. Lokasi simpan
    //     $path = public_path('tes/' . $filename); // folder 'tes'

    //     // 3. Simpan audio (misalnya hasil dari TTS engine)
    //     // Ini contoh dummy - kamu ganti dengan hasil dari TTS API
    //     // Ini base64 dari file MP3 asli yang berdurasi sangat singkat
    //     // $audioContent = hasil dari TTS API (MP3 binary)
    //     file_put_contents($path, $audioContent);

    //     // 4. Kirim filename ke frontend
    //     return response()->json(['filename' => $filename]);
    // }

    
    public function generate(Request $request)
    {
        // set_time_limit(120);
        $text = $request->input('text');

        if (empty($text)) {
            return response()->json(['error' => 'Text is required'], 400);
        }

        $filename = 'output_' . uniqid() . '.mp3';
        $path = public_path('tes/' . $filename);

        // Konfigurasi Azure
        $region = env('AZURE_SPEECH_REGION'); // atur sesuai region kamu
        $key = env('AZURE_SPEECH_KEY');

        // Endpoint Azure
        $endpoint = "https://{$region}.tts.speech.microsoft.com/cognitiveservices/v1";

         $escapedText = htmlspecialchars($text, ENT_QUOTES | ENT_XML1);
        // SSML (bisa juga plain text)
        $ssml = <<<XML
    <speak version='1.0' xml:lang='id-ID'>
        <voice xml:lang='id-ID' xml:gender='Male' name='id-ID-ArdiNeural'>
            {$escapedText}
        </voice>
    </speak>
    XML;

        $response = Http::withHeaders([
            'Ocp-Apim-Subscription-Key' => $key,
            'Content-Type' => 'application/ssml+xml',
            'X-Microsoft-OutputFormat' => 'audio-16khz-32kbitrate-mono-mp3',
            'User-Agent' => 'Laravel-TTS-App'
        ])->timeout(120)
        ->withBody($ssml, 'application/ssml+xml')->post('https://' . env('AZURE_SPEECH_REGION') . '.tts.speech.microsoft.com/cognitiveservices/v1');

        if ($response->failed()) {
            return response()->json
            (['error' => 'Azure TTS failed', 'status' => $response->status(), 'detail' => $response->body()], 500);
        }

        file_put_contents($path, $response->body());

        return response()->json(['filename' => $filename]);
    }

    public function play($filename)
    {
        // Validasi & sanitasi filename
        $safeFilename = basename($filename);

        if (!preg_match('/^output_[a-zA-Z0-9]+\.mp3$/', $safeFilename)) {
            abort(400, 'Invalid filename');
        }

        $path = public_path('tes/' . $safeFilename); // ambil dari folder 'tes'

        if (!file_exists($path)) {
            abort(404, 'Audio not found');
        }

        return response()->file($path, [
            'Content-Type' => 'audio/mpeg'
        ]);
    }


    public function other(){
        return view('txtfile');
    }
    public function audiorequestcontrol(Request $request){
        set_time_limit(120);
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
        curl_close($ch);

        if (empty(trim($text))) {
    return response("❌ Teks kosong!", 400);
}
        // Kirim Text and terima Audio
        $ssml = "<speak version='1.0' xml:lang='id-ID'>
            <voice name='id-ID-ArdiNeural'>" . htmlspecialchars($text) . "</voice>
        </speak>";
        //id-ID-GadisNeural

        // Ambil token, kirim TTS, dan simpan audio

// curl request TTS (setelah dapat token dan endpoint)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $ssml);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $accessToken",
    "Content-Type: application/ssml+xml",
    "X-Microsoft-OutputFormat: audio-24khz-160kbitrate-mono-mp3",
    "User-Agent: WebsiteLaravel"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

if ($httpCode == 200 && strpos($contentType, 'audio') !== false) {
        if (empty($response)) {
        echo "Response kosong meskipun HTTP 200. Bisa jadi SSML-nya tidak valid atau text-nya kosong.";
        exit;
    }

    file_put_contents(public_path('output.mp3'), $response);

    echo "<audio controls autoplay>
            <source src='/output.mp3?ts=".time()."' type='audio/mpeg'>
          </audio>";
} else {
    echo "TTS gagal. HTTP Code: $httpCode<br>";
    echo "Content-Type: $contentType<br>";
    echo "Response:<br><pre>" . htmlentities(substr($response,0,500)) . "</pre>";
}

        
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $endpoint);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $ssml);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //     "Authorization: Bearer $accessToken",
        //     "Content-Type: application/ssml+xml",
        //     "X-Microsoft-OutputFormat: audio-16khz-32kbitrate-mono-mp3",
        //     "User-Agent: WebsiteLaravel"
        // ]);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE); 
        // curl_close($ch);

        // if ($httpCode == 200) {
        //     file_put_contents("outputs.mp3", $response);
        //     echo "<audio controls autoplay><source src='output.mp3' type='audio/mpeg'></audio>";
        // } else {
        //     echo "TTS gagal. HTTP Code: $httpCode";
        // }
        // return response($response, 200)
        //    ->header('Content-Type', 'audio/mpeg');

    }
}
