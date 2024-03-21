<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("template.layout");
        $judulTentang = 'Tentang Aplikasi';
        $isiTentang = 'Informasi tentang aplikasi yang sedang Anda gunakan. Aplikasi ini didesain untuk memudahkan pengguna dalam melakukan tugas tertentu.';
        $judulLayanan = 'Layanan Aplikasi';
        $daftarLayanan = ['Fitur A', 'Fitur B', 'Fitur C'];

        return view('home', compact('judulTentang', 'isiTentang', 'judulLayanan', 'daftarLayanan'));
    }
}
