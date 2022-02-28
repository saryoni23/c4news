<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'Pendaftaran
            ',
        ];

        echo view('templates/header', $data);
        echo view('pages/daftar', $data);
        echo view('templates/footer', $data);
    }
}
