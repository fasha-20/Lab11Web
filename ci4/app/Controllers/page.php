<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function about()
  {
    return view('about', ['title' => 'Halaman About', 'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.']);
  }
  public function artikel()
  {
    return view('about', ['title' => 'Halaman Artikel', 'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.']);
  }
  public function contact()
  {
    return view('about', ['title' => 'Halaman Contact', 'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.']);
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
  public function tos()
  {
    echo "Ini halaman Term of Services";
  }
}