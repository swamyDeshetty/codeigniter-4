<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class DeleteUserController extends BaseController
{
    public function delete($id = null)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/'));
    }
}
