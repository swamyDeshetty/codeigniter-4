<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "shivaprasad ",
				"email" => "shiva@mail.com",
				"phone_no" => "9912377326",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "swamy",
				"email" => "swamybittu649@gmail.com",
				"phone_no" => "9553439808",
				"role" => "editor",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}