<?php
require_once 'Model/home.php';

class HomeController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Home();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/home.php';
        require_once 'View/footer.php';
    }
}