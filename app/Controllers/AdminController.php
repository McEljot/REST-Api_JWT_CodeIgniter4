<?php

namespace App\Controllers;

class AdminController extends BaseController
{
	public function index()
	{
	//return view('admin_user');
	$model = model(UserModel::class);

    $data = [
		'title' => 'User Liste',
        'users'  => $model->orderBy('id','name')->findAll(),
        
    ];

    echo view('templates/header', $data);
    echo view('admin/admin_user', $data);
    echo view('templates/footer', $data);

	}

	public function view($slug = null)  //all user bzw. $slug /id
    {
        $model = model(UserModel::class);

        $data['users'] = $model->getUsers($slug);
    }
}
