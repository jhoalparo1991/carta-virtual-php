<?php 


	class Categories
	{

	    public function __construct()
	    {

	    	$this->db = new Database();
	    	
	        
	    }

	    function getAll(){
	    	$items = array();
	    	try{
	    	$query = $this->db->connect()->query('SELECT id,name_section FROM section ORDER BY id');
	    	
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