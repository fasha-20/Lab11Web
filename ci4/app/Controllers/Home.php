<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index',
        [
            'title' => 'Dashboard',
        'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.'
        ]
    );
    }
}