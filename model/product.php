<?php 


	class Product{

		function __construct(){
			$this->db = new Database();
		}



		function getProducts($idCategory){
	    	try{
	    		$items = array();
		    	$sql = "SELECT s.id,s.name_section,s.general_description,s.comment, a.name_articles, a.description, a.description2,a.description3, p.price1,p.price2,p.status,e.id, e.name_enterprise FROM products p
					INNER JOIN articles a ON p.articles_id = a.id
					INNER JOIN enterprise e ON p.enterprise_id = e.id
					INNER JOIN section s ON p.section_id = s.id
				WHERE s.id = ".$idCategory." AND e.id=".$_SESSION['id']." AND p.status=1";

			$query = $this->db->connect()->query($sql);
			
			while( $rows = $query->fetch()){
				array_push($items, $rows);
			}
			return $items;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	    }



	}







?>