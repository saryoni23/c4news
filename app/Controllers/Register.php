<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'Pendaftaran
            ',
        ];


        echo view('auth/register', $data);
    }
}
