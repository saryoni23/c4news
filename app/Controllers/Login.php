<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'Login',
        ];


        echo view('auth/login', $data);
    }
}
