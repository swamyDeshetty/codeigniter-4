<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register_form');
    }

    public function register()
    {
          $User = new UserModel();

            // Handle profile image upload
            $profileImage = $this->request->getFile('profile');
            if ($profileImage->isValid() && !$profileImage->hasMoved()) {
                $profileImageName = $profileImage->getRandomName();
                if ($profileImage->getError() !== UPLOAD_ERR_OK) {
                    // Log or display an error message
                    die('Error uploading the profile image: ' . $profileImage->getErrorString());
                }
                $profileImage->move('images', $profileImageName);
            }

            // Handle signature file upload
            $signatureFile = $this->request->getFile('signature');
            if ($signatureFile->isValid() && !$signatureFile->hasMoved()) {
                $signatureFileName = $signatureFile->getRandomName();
                if ($signatureFile->getError() !== UPLOAD_ERR_OK) {
                    // Log or display an error message
                    die('Error uploading the signature file: ' . $signatureFile->getErrorString());
                }
                $signatureFile->move('images', $signatureFileName);
            }

               // Hash the password
            $password = $this->request->getPost('password');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone_no' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'gender' => $this->request->getPost('gender'),
                'date_of_birth' => $this->request->getPost('dob'),
                'profile_pic' => $profileImageName,
                'signature' => $signatureFileName,
                'password' => $hashedPassword,
            ];

            $User->save($data);
            return redirect()->to('/login');
        }


    
}
