<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;

class HomeController extends Controller
{
    public function home(){
        $data['list_produk'] = Produk::all();
        return view('welcome', $data);
    }

}
