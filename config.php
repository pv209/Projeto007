<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');
        
	};

    spl_autoload_register($autoload);
	define('INCLUDE_PATH','http://localhost/Projeto-07-main/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto_01');


	function pegaCargo($cargo){
		$arr = [
		  '0'=>'Normal',
		  '1'=>'Sub Administrador',
		  '2'=>'Administrador' 
		];
		return $arr[$cargo];	
	}

 ?>