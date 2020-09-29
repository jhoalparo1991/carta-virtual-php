<?php


class App{

	function __construct(){
			
			$url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
	        
	        $url = rtrim($url,"/");
	        
			$url = explode('/',$url);
			
			$controllerPath = 'controller/'.ucwords($url[0]).'Controller.php';

			if(file_exists($controllerPath)){
				require_once $controllerPath;
				$controller = new $url[0];
				if(isset($url[1])){
					if(!empty($url[1])){
						if(method_exists($controller,$url[1])){
							$params = "";
							for ($i=2; $i < count($url); $i++) { 
								$params .= $url[$i]."/";
							}
							$params = rtrim($params,"/");
							$controller->{$url[1]}($params);
						}else{
							header('location: '.URL.'home/index');
						}
					}else{
						header('location: '.URL.'home/index');
					}
				}else{
					header('location: '.URL.'home/index');
				}
			}else{
				header('location: '.URL.'home/index');
			}


	    
	}

}



?>