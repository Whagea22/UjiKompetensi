<?php

namespace App\Http\Controllers\Dosen;


use App\Http\Controllers\Controller;
use App\Models\Dosen;


class PengajuanSelesai extends Controller
{
    public function index(){
        return view('Dosen/pselesai/index');
    }
}