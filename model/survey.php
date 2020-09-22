<?php 

	class Survey{


		function __construct(){
			$this->db = new Database();
		}


		function register($data){
		try{
				$sql = "INSERT INTO survey (fullname,phone,type_document,document,temperature,symptons,enterprise,campus)
					     VALUES(:fullname,:phone,:type_document,:document,:temperature,:symptons,:enterprise,:campus)";

			$query = $this->db->connect()->prepare($sql);


			$row = $query->execute([
				'fullname'=>$data['fullname'],'phone'=>$data['phone'],
				'type_document' => $data['type_document'],'document'=>$data['document'],
				'temperature'=>$data['temperature'],'symptons'=>$data['symptons'],
	    		'enterprise'=>$data['enterprise'],'campus'=> $data['campus']
	    	]);

			if($row > 0){
				return true;
			}else{
				return false;
			}	
		}catch(PDOException $e){
			die($e->getMessage());
		}
		}
	}



 ?>