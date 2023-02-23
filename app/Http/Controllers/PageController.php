<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        echo 'Braman Tyamahendrawan <br>';
        echo '2141720097';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id {id}'.$id;
    }
}
