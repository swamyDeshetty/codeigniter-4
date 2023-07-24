<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    protected $userModel; // Declare a protected variable to hold the UserModel instance.

    public function __construct()
    {
        $this->userModel = new UserModel(); // Load the UserModel in the constructor.
    }

    public function index()
    {
        
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }

        // Fetch all users from the UserModel
        $data['users'] = $this->userModel->findAll();

        return view("admin/dashboard", $data);
    }
}
