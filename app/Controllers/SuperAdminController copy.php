<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SuperAdminController extends BaseController
{
 

    public function __construct()
    {
        if (session()->get('role') != "superadmin") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("superadmin/dashboard");
    }
}