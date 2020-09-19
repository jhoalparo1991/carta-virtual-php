<?php 

	class ItemsModel{


		function __construct(){
			echo " <h1>Items Model</h1>";
			$this->db = new Database();
			$this->getTotalArticles();
		}

		function getTotalArticles(){
			$data = "SELECT COUNT(id) AS TOTAL FROM articles";
			$query = $this->db->connect()->query($data);
			return $query->fetchColumn();
		}

	}




 ?>