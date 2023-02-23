<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($id)
    {
        return "Halaman artikel dengan id $id";
    }    

}

