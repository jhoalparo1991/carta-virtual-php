<?php

    require_once './model/categories.php';
    require_once './model/enterprise.php';
    class Home extends Controller {


        function __construct(){
            parent::__construct();
            $this->section = new Categories();
            $this->enterprise = new Enterprise();
        }

        function index(){
            $data = [
                'enterprise' => $this->enterprise->getAll()
            ];
            $this->loadViews('home',$data);
            echo $this->loadViews('includes/footer');
        }

        function home(){
            $data = [
                'header' => $this->section->getAll()
            ];
            echo $this->loadViews('includes/header',$data);
            $this->loadViews('home');
            echo $this->loadViews('includes/footer');
        }

    }



?>