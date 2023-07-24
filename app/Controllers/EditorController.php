<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class EditorController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "user") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("editor/dashboard");
    }
    // Method to update user details
    public function updateDetails()
    {
        $userModel = new UserModel();

        // Get the submitted form data
        $userId = session()->get('id'); // Get the user ID from the session
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phoneNo = $this->request->getPost('phone_no');
        $address = $this->request->getPost('address');
        // Get more user details from the form as needed

        // Update the user's details in the database
        $userModel->update($userId, [
            'name' => $name,
            'email' => $email,
            'phone_no' => $phoneNo,
            'address' => $address,
            // Update more user details in the database as needed
        ]);

        // Store the updated user details in the session
        session()->set([
            'name' => $name,
            'email' => $email,
            'phone_no' => $phoneNo,
            'address' => $address,
            // Set more updated user details in the session as needed
        ]);

        // Optionally, you can set a success message
        session()->setFlashdata('success', 'User details updated successfully.');

        // Redirect back to the Editor Dashboard
        return redirect()->to(site_url('user'));
    }


}