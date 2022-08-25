<?php 
require_once('main_model.php');

class Config{

    
	// insert video
	private $video_code;

    //variables to this class
	private $result;
	private $database;
	public $null = null;


	public function __construct()
	{
		$this->database = new Connection_Mysql();

	}

    /*------------------------Encriptar cadenas----------------------------*/
        // esta funcion va a ser publica porque se va a usar en algunas vistas 
        public function encryption($string){
            $output=FALSE;
            $key=hash('sha256', SECRET_KEY);
            $iv=substr(hash('sha256', SECRET_IV), 0, 16);
            $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
            $output=base64_encode($output);
            return $output;
        }

    /*------------------------Desencriptar cadenas----------------------------*/
        protected static function decryption($string){
            $key=hash('sha256', SECRET_KEY);
            $iv=substr(hash('sha256', SECRET_IV), 0, 16);
            $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
            return $output;
        }


}