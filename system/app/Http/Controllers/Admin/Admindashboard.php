<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Produk;
use Illuminate\Http\Request;

class Admindashboard extends Controller
{
    public function index()
    {
        // $jumlah_pengajuanmasuk = Berkaspengajuan::all()->where('status',2)->count();
        // $jumlah_pengajuanditerima = Berkaspengajuan::all()->where('status',3)->count();
        // $jumlah_pengajuanditolak = Berkaspengajuan::all()->where('status',4)->count();
        // $jumlah_dosen = Dosen::all()->count();
        $jumlah_produk = Produk::all()->count();
        $jumlah_user = Admin::all()->count();

        return view('Admin.dashboard')
            ->with('jumlah_produk', $jumlah_produk)
            ->with('jumlah_user', $jumlah_user);
    }

    // public function index(){
    //     return view('Admin.dashboard');
    // }
}
