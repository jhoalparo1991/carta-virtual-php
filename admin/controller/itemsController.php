<?php 


	require_once './model/itemModel.php';
	require_once './core/controller.php';
	class ItemsController extends Controller{


		function __construct(){
			parent::__construct();
			$this->item = new ItemsModel(); 
			echo " <h1>Items Controller</h1>";
			$this->view->render('main');
		}
	}











 ?>

