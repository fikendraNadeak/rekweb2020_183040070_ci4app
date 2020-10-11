<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => "Fikendra N| Home Page"
    ];
    return view('pages/home', $data);
  }
  public function about($nama = 'Fikendra N', $umur = 21)
  {
    $data = [
      'title' => "About Me",
      'nama' => $nama,
      'umur' => $umur
    ];
    return view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => "Contact Us",
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl. abc no 111',
          'kota' => 'Kab Bogor'
        ],
        [
          'tipe' => 'Universitas Pasundan',
          'alamat' => 'Jl. Dr Setiabudi No.193',
          'kota' => 'Kota Bandung'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
