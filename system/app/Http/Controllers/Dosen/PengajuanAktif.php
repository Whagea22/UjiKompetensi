<?php

namespace App\Http\Controllers\Dosen;


use App\Http\Controllers\Controller;
use App\Models\Dosen;


class PengajuanAktif extends Controller
{
    public function index(){
        return view('Dosen/paktif/index');
    }
}