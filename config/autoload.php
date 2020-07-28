<?php
    class Autoloader {
        static function register(){
            spl_autoload_register(array(__CLASS__, "autoload"));
        }
        static function autoload($class){
            
            $chain = str_replace("\\","/", $class); 
                
            $AbsPath = str_replace("\\","/",dirname(__DIR__)."/src/".$chain.".php");
            // var_dump($AbsPath);
            // die;    
            // var_dump($AbsPath);
            // die;         
            // $APWConfigFolder = str_replace("config","",$AbsPath);
            
            if (file_exists($AbsPath)) {
                include_once $AbsPath;
            } else {
                die("Utilisez le mot clef USE suivi de ".$class);
            }
        }
    }
    Autoloader::register();
?>