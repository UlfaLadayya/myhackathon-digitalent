<?php

    namespace App\Services;

    class TextSpeechServices {
        public static function prepare (array $texts){
            return array_values($texts);
        }

    }


?>