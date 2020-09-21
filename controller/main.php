<?php 
	
	
	    	
	require_once './model/survey.php';
	class Main extends Controller
	{
	
	    public function __construct()
	    {
	    	parent::__construct();
	  		$this->getAllCategories();

	    	$this->render();
	    }

	    function render(){
	    	$this->view->render('index');
	    }

	    function survey(){

	    		if(isset($_POST['survey'])){
	    		$fullname = $_POST['fullname'];
	    		$phone = $_POST['phone'];
	    		$type_document = $_POST['type_document'];
	    		$document = $_POST['document'];
	    		$temperature = $_POST['temperature'];
	    		$symptons = $_POST['symptons'];
	    		$enterprise = $_POST['enterprise'];
	    		$campus = $_POST['campus'];

	    		if (empty($fullname) || empty($phone) || empty($document) || empty($temperature) || empty($enterprise)
	    		|| empty($campus)) {
	    				echo "<script>
		    				Swal.fire({
								  icon: 'error',
								  title: 'Encuesta',
								  text: 'Todos los campos son necesarios'								  
								})
		    			</script>";
	    		}else{
	    			$data = ['fullname'=>$fullname,'phone'=>$phone,'type_document' => $type_document,'document'=>$document,
	    			'temperature'=>$temperature,'symptons'=>$symptons,
	    			'enterprise'=>$enterprise,'campus'=> $campus];
	    			
	    	
		    		$this->survies = new Survey();

		    		$row = $this->survies->register($data);
		    		if ($row) {
		    			//$this->view->info .= "Gracias por contestar esta encuesta";
		    			$this->clearData();
		    			echo "<script>
		    				Swal.fire({
								  icon: 'success',
								  title: 'Encuesta',
								  footer: '<a href =".constant('URL').">Seguir contestando</a>',
								  text: 'Registro creado con exito'
								  
								})
		    			</script>";
		    		}else{
		    			echo "<script>
		    				Swal.fire({
								  icon: 'error',
								  title: 'Encuesta',
								  text: 'Hubo error sigue intentadolo'								  
								})
		    			</script>";
		    		}
	    	
	    		}
	    	}
	    	
	    }

	    private function clearData(){
	    		$_POST['fullname']="";
	    		$_POST['phone']="";
	    		$_POST['type_document']="";
	    		$_POST['document']="";
	    		$_POST['temperature']="";
	    		$_POST['symptons']="";
	    		$_POST['enterprise']="";
	    		$_POST['campus']="";
	    }

	    function campus($param){
	    	$id = $param[0];
	    	$_SESSION['id'] = $id;
	    }
	   
	}


 ?>