<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    function index(){
        return view('Admin.artikel.index');
    }

    function create(){
        return view('Admin.artikel.create');
    }

    function show(){
        return view('Admin.artikel.show');
    }
}

