<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class EditUserController extends BaseController
{
   

     // show single user
     public function edit($id){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->find($id);
        return view('edituser', $data);
    }
    // update user data
    public function update($id){
        $userModel = new UserModel();
        $user = $userModel->find($id); 
        // echo $user['profile_pic'];

        // Image update
        $old_img_name = $user['profile_pic'];


        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            if(file_exists("images/".$old_img_name)){
                unlink("images/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move("images/",$imageName);
        }
        else{
            $imageName =  $old_img_name;
        }
        // signature update

        $old_sign = $user['signature'];


        $file = $this->request->getFile('signature');
        if($file->isValid() && !$file->hasMoved())
        {
            if(file_exists("images/".$old_sign)){
                unlink("images/".$old_sign);
            }
            $imageSign = $file->getRandomName();
            $file->move("images/",$imageSign);
        }
        else{
            $imageSign =  $old_sign;
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone'),
            'role' => $this->request->getPost('role'),
            'address' => $this->request->getPost('address'),
            'gender' => $this->request->getPost('gender'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'profile_pic' => $imageName,
            'signature' => $imageSign,
        ];
        $userModel->update($id,$data);
        return redirect()->to('/superadmin')->with('status',"Data is updated");

    }
 
}
