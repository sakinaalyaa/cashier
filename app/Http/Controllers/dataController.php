<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index(){
    // $data['menu'] = menu::get();
    $jumlah_menu = menu::count();

    //tampilkan 10 sata pelanggan terkahir
    // $data['pelanggan'] = pelanggan::limit(0,10)->sortBya('created_at', 'desc')->get();


    return view('template.data', ['jumlah_menu' => $jumlah_menu]);
    // return view('data')->with($data);
}
}
