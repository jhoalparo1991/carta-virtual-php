<?php


class App{

	function __construct(){

	    if( isset($_GET['url']) ){

	    	$url = isset($_GET['url']) ? $_GET['url'] : null;
	        
	        $url = rtrim($url,"/");
	        
	        $url = explode('/',$url);


	       

	        if(empty($url[0])){
	        	$this->renderMain();
	        }

	 		$controllerPath = "controller/".$url[0].".php";
	        if(file_exists($controllerPath)){

				require $controllerPath;
	        	$controller = new $url[0];	
	        	//Numero de elementos de la url
	        	$nParams = sizeof($url);

	        	if($nParams > 1){
	        		if($nParams > 2){
	        		$param = [];
	        		 for($i = 2; $i < $nParams; $i++){
	        		 	array_push($param,$url[$i]);
	        		 }
	        		 
	        		 $controller->{$url[1]}($param);
	        	}else{
	        		$controller->{$url[1]}();
	        	}	
	        	}
	        	
	        	/*
	        	if(isset($url[1])){
	        		$controller->{$url[1]}();	
	        	}*/
	        }

	    }else{
	    	$this->renderMain();
	    }
	}

	function renderMain(){
		require 'controller/home.php';
        $controller = new Home();
        return false;
	}

}



?>