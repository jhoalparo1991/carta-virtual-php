<?php 

	require_once './model/categories.php';
	class Controller 
	{
	    
	    public function __construct()
	    {
	    	
	        $this->view = new Views();
	    }

	    function getAllCategories(){
	    	$this->model = new Categories();
	    	$data = $this->model->getAllCategories();
	    	return $data;
	    }
	}




 ?>

