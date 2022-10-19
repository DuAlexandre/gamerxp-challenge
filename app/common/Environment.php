<?php

    namespace App\Common;

    class Environment {

        //Criação das variáveis de ambiente

        public static function load($dir) {
            if(!file_exists($dir.'/.env')) {
                return false;
            }

            $lines = file($dir.'/.env');
           
            foreach($lines as $line) {
                putenv(trim($line));
            }
        }
    }


?>