<?php

    require_once './model/categories.php';
    require_once './model/product.php';
    class Product extends Controller {


        function __construct(){
            parent::__construct();
            $this->section = new Categories();
            $this->product = new Products();
        }

        function category($id){

            $data = [
                'header' => $this->section->getAll(),
                'product' => $this->product->getAll($id)
            ];
            echo $this->loadViews('includes/header',$data);
            $this->loadViews('products',$data);
            echo $this->loadViews('includes/footer');
        }

    }



?>