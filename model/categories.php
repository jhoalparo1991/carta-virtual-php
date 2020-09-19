<?php 


	class Categories
	{

	    public function __construct()
	    {

	    	$this->db = new Database();
	    	
	        
	    }

	    function getAllCategories(){
	    	$items = array();
	    	try{
	    	$query = $this->db->connect()->query('SELECT id,name_category,code as cod FROM categories ORDER BY id');
	    	
	    	while($rows = $query->fetch()){
	    		array_push($items, $rows);
	    	}
	    	return $items;
	    	}catch(PDOException $e){
	    		die($e->getMessage());
	    	}
	   
	    }

	}


 ?>