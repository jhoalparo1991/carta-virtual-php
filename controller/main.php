<?php 
	
	
	
	class Main extends Controller
	{
	 
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->view->msg = $this->getAllCategories();
	    	$this->render();

	    }

	    function render(){
	    	$this->view->render('index');
	    }

	   
	}


 ?>