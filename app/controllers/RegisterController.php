<?php

namespace App\Controllers;

class RegisterController
{
    public $registerModel;

    public function __construct()
    {
        $this->registerModel = new \App\Models\RegisterModel;
    }

    public function index()
    {
        include('app/public/views/register.php');
        unset($_SESSION['error_msg']);
        unset($_SESSION['success_msg']);
    }

    public function register($data)
    {
        $this->registerModel->registerUser($data);
    }
}