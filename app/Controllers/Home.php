<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'Home',
        ];

        echo view('templates/header', $data);
        echo view('pages/home', $data);
        echo view('templates/footer', $data);
    }
}
