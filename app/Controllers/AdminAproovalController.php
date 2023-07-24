<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminAproovalController extends BaseController
{
    public function pendingUsers()
    {
        $userModel = new UserModel();
        
        // Fetch only users with is_approved = 0 and role != 'Admin' and role != 'Super Admin'
        $data['pendingUsers'] = $userModel
            ->where('is_approved', 0)
            ->whereNotIn('role', ['admin', 'superadmin'])
            ->findAll();

        return view('adminaproove.php', $data);
    }

    public function approveUser($id)
    {
        $userModel = new UserModel();
    
        // Check if the user exists in the database.
        $user = $userModel->find($id);
    
        if (!$user) {
            return redirect()->to(base_url('adminaproove'))->with('error', 'User not found.');
        }
    
        try {
            // Update the 'is_approved' field to 1 (approved).
            $userModel->update($id, ['is_approved' => 1]);
    
            return redirect()->to(base_url('adminaproove'))->with('success', 'User approved successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during the update process.
            return redirect()->to(base_url('adminaproove'))->with('error', 'Failed to approve user.');
        }
    }
    
    

  
}
