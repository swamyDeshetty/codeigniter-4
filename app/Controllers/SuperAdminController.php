<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SuperAdminController extends BaseController
{
    protected $userModel; // Declare a protected variable to hold the UserModel instance.

    public function __construct()
    {
        $this->userModel = new UserModel(); // Load the UserModel in the constructor.
    }

    public function index()
    {
        
        if (session()->get('role') != "superadmin") {
            echo 'Access denied';
            exit;
        }

        // Fetch all users from the UserModel
        $data['users'] = $this->userModel->findAll();

        return view("superadmin/dashboard", $data);
    }
}
