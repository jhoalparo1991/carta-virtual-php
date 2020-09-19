<?php 
	
	include_once './model/product.php';

	class Products extends Controller
	{
	 
	    public function __construct()
	    {
	    	parent::__construct();
	  		$this->view->msg =  $this->getAllCategories();
	  		$this->view->data = $this->list(); 
	  		$this->view->title = isset($this->view->data[0][1]) ? $this->view->data[0][1] : null;
	  		$this->render();
	  		
	  		 	
	  		//print_r($this->view->title);
	    }

	    function render(){
	    	$this->view->render('products');
	    }



   		function list(){
   			$this->model = new Product();
   			$url = $_GET['url'];
	  		$url = explode("/",$url);
  			$id = $url[2];
			$data = $this->model->getProducts($id);
			return $data;
	    }


	}


 ?>

