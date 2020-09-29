<?php

    require_once './model/categories.php';
    require_once './model/enterprise.php';
    require_once './model/survey.php';
    class Survey extends Controller {


        function __construct(){
            parent::__construct();
            $this->section = new Categories();
            $this->enterprise = new Enterprise();
            $this->survies = new Survies();
        }

        function index($id){
            $_SESSION['id_enterprise'] = $id;
            $_SESSION['ok'] = true;
            $data = [
                'header' => $this->section->getAll()
            ];
            echo $this->loadViews('includes/header',$data);
            $this->loadViews('index');
            echo $this->loadViews('includes/footer');
        }

        function create(){

	    		if(isset($_POST)){
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
                
                $_SESSION['fullname'] = $fullname;
                $_SESSION['phone'] = $phone;
                $_SESSION['document'] = $document;
                $_SESSION['temperature'] = $temperature;

        
	    		if (empty($fullname) || empty($phone) || empty($document) || empty($temperature) || empty($enterprise)
	    		|| empty($campus)) {
                    $data = [
                        'header' => $this->section->getAll(),
                        'msg' => 'Todos los campos son requeridos'
                    ];
                    echo $this->loadViews('includes/header',$data);
                    $this->loadViews('index',$data);
                    echo $this->loadViews('includes/footer');
	    		}else{
	    			$data = ['fullname'=>$fullname,'phone'=>$phone,'type_document' => $type_document,'document'=>$document,
	    			'temperature'=>$temperature,'symptons'=>$symptons,
	    			'enterprise'=>$enterprise,'campus'=> $campus];
	    			
	    	
		    		

		    		 if($this->survies->register($data)){

                        unset($_SESSION['fullname']);
                        unset($_SESSION['phone']);
                        unset($_SESSION['document']);
                        unset($_SESSION['temperature']);
                        $data = [
                            'header' => $this->section->getAll()
                        ];
                        echo $this->loadViews('includes/header',$data);
                        $this->loadViews('index',$data);
                        echo $this->loadViews('includes/footer');
                     }else{
                        $data = [
                            'header' => $this->section->getAll(),
                            'msg' => 'Hubo un error al crear el registro'
                        ];
                        echo $this->loadViews('includes/header',$data);
                        $this->loadViews('index',$data);
                        echo $this->loadViews('includes/footer');
                     }
		    		
	    	
	    		}
	    	}
        }

    }



?>