<?php 


	class Views{


		function __construct(){
			
		}

		function render($name){
			require_once 'views/'.$name.'.php';
		}

	}

 ?>