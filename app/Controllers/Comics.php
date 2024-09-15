<?php

namespace App\Controllers;

use App\Models\comicsModel;
class Comics extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Comics List'
        ];

        $comicsModel = new comicsModel();
        $comics = $comicsModel->findAll();
        dd($);

        return view('comics/index', $data);
    }
}