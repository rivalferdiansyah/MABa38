<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [
            [
                'id' => 1,
                'nama' => 'Mie Ayam',
                'harga' => 12000,
                'gambar' => 'mie_ayam.jpeg',
            ],
            [
                'id' => 2,
                'nama' => 'Mie Bakso Cincang',
                'harga' => 18000,
                'gambar' => 'mie_bakso_cincang.jpeg',
            ],
            [
                'id' => 3,
                'nama' => 'Mie Bakso Telur',
                'harga' => 18000,
                'gambar' => 'mie_bakso_telur.jpeg',
            ],
        ];

        return view('menu', compact('menus')); // gunakan view: resources/views/menu.blade.php
    }
}
