<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Arin Kistia Nugraeni - 1941720006";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
