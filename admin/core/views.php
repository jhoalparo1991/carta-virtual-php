<?php 


	class Views{

		function __construct(){
			echo " <h1>Views</h1>";
		}

		function render($name){
			require_once 'views/'.$name.'.php';
		}

	}


 ?>