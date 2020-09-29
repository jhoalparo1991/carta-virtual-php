<?php 



	class Enterprise{

		function __construct(){
			$this->db = new Database();
		}


		function getAll(){
			$items = [];
			try{
			$query = $this->db->connect()->query("SELECT id,name_enterprise FROM enterprise");

			while($rows = $query->fetch()){
	    		array_push($items, $rows);
	    	}
	    	return $items;
	    	}catch(PDOException $e){
	    		exit();
	    	}
		}

	}





 ?>