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

        echo view('templates/header', $data);
        echo view('pages/login', $data);
        echo view('templates/footer', $data);
    }
}
