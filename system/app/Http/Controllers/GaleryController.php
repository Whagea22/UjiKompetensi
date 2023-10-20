<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    function index(){
        return view('Admin.galery.index');
    }

    function create(){
        return view('Admin.galery.create');
    }

    function show(){
        return view('Admin.galery.show');
    }

    function store(Request $req)
    {
        $galery = new Pesanan;
        $galery->id_produk = request('id_produk');
        $galery->nama_pemesan = request('nama_pemesan');
        $galery->alamat = request('alamat');
        $galery->no_hp = request('no_hp');
        $galery->tgl = request('tgl');
        $galery->save();

        return redirect('Admin/produk')->with('success', 'Data Dosen Berhasil Disimpan');
    }
}

