<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Artikel extends Controller
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

