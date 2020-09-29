<?php 

	class Controller 
	{
	    
	    public function __construct()
	    {
	    	
	        
	    }
		
		function loadViews($views,$data =[]){
			$pathView = './views/'.$views.'.php';
	
			if(file_exists($pathView)){
				require_once $pathView;
			}else{
				echo "No existe la vista";
			}
		}
	}




 ?>

