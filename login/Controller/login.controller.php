<?php
require_once 'Model/login.php';

class LoginController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Login();
    }

    public function Index()
    {
        require_once 'View/login.php';
    }
}