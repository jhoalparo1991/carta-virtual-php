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
	    		$sFullname = $_POST['fullname'];
	    		$sPhone = $_POST['phone'];
	    		$sType_document = $_POST['type_document'];
	    		$sDocument = $_POST['document'];
	    		$sTemperature = $_POST['temperature'];
	    		$sSymptons = $_POST['symptons'];
	    		$sEnterprise = $_POST['enterprise'];
	    		$sCampus = $_POST['campus'];

	    		$fullname = filter_var($sFullname,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$phone = filter_var($sPhone,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$document = filter_var($sDocument,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$type_document = filter_var($sType_document,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$temperature = filter_var($sTemperature,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$symptons = filter_var($sSymptons,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$enterprise = filter_var($sEnterprise,FILTER_SANITIZE_SPECIAL_CHARS);
	    		$campus = filter_var($sCampus,FILTER_SANITIZE_SPECIAL_CHARS);

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