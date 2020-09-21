<?php 

	require_once './model/enterprise.php';
	class Home extends Controller{

		function __construct(){
			parent::__construct();
			$this->view->render('home');
			
			
		}

		function getEnterprise(){
			$this->mEnterprise = new Enterprise();
			$data = $this->mEnterprise->getEnterprise();
			return $data;
		}

	}




 ?>