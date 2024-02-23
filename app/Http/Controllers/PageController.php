<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return ' Selamat Datang';
    }

    public function test(){
        return ' Selamat Datang';
    }

    public function about(){
        return ' Jati Wahyu Kusuma 2141762139';
    }

    public function articles($id){
            return 'Halaman Artikel dengan ID '.$id;
    }
}