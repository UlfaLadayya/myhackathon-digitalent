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
            "X-Microsoft-OutputFormat: audio-16khz-32kbitrate-mono-mp3",
            "User-Agent: WebsiteLaravel"
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE); 
        curl_close($ch);

        if ($httpCode == 200) {
            file_put_contents("output.mp3", $response);
            echo "<audio controls autoplay><source src='output.mp3' type='audio/mpeg'></audio>";
        } else {
            echo "TTS gagal. HTTP Code: $httpCode";
        }
        return response($response, 200)
           ->header('Content-Type', 'audio/mpeg');

    }
}

///////////////////////////////////////////////////
        // if ($httpCode == 200) {
        //     $filePath = public_path('output.mp3');
        //     file_put_contents($filePath, $response);

        //     $timestamp = time();
        //     echo "<audio controls autoplay>
        //             <source src='/output.mp3?ts=$timestamp' type='audio/mpeg'>
        //             Your browser does not support the audio element.
        //         </audio>";
        // } else {
        //     echo "TTS gagal. HTTP Code: $httpCode";
        // }
        // if ($httpCode === 200 && strpos($contentType, 'audio') !== false) {
        //     // Simpan file ke public/output.mp3
        //     $path = public_path('output.mp3');
        //     file_put_contents($path, $response);

        //     // Tampilkan player dengan cache buster
        //     $timestamp = time();
        //     return response()->view('masaprasejarah', ['ts' => $timestamp]);
        // } else {
        //     return response("TTS gagal. HTTP Code: $httpCode. <br>Content-Type: $contentType", 500);
        // }

        ////////////////////////////////////////////////////
        // if ($httpCode == 200) {
        //     // Hapus file lama jika ada
        //     $filePath = public_path('output.mp3');
        //     if (file_exists($filePath)) {
        //         unlink($filePath);
        //     }

        //     // Simpan file mp3 baru
        //     file_put_contents($filePath, $response);

        //     // Tampilkan audio player dengan cache buster
        //     $timestamp = time();
        //     echo "<audio controls autoplay>
        //             <source src='output.mp3?ts=$timestamp' type='audio/mpeg'>
        //             Your browser does not support the audio element.
        //         </audio>";
        // } else {
        //     echo "TTS gagal. HTTP Code: $httpCode";
        // }