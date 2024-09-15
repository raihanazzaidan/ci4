<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rey',
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Rey',
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Rey',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Suroto No. 12',
                    'kota' => 'Bandung',
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Suroto No. 13',
                    'kota' => 'Bandung',
                ]
            ]
        ];
        
        return view('pages/contact', $data);
    }
}

