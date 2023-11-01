<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index(){
        $data['list_produk'] = Produk::all();
        return view('Admin.produk.index', $data);
    }

    function create(){
        return view('Admin.produk.create');
    }

    function add(){
        return view('Admin.produk.addprewed');
    }

    function tambah(){
        return view('Admin.produk.adddekorasi');
    }

    function store(Request $req)
    {
        $produk = new Produk;
        $produk->jenis_paket = request('jenis_paket');
        $produk->harga = request('harga');
        $produk->alamat = request('alamat');
        $produk->tgl_input = request('tgl_input');
        $produk->UploadFotoProduk('foto_produk');
        $produk->save();

        return redirect('Admin/produk')->with('success', 'Data Dosen Berhasil Disimpan');
    }

    function show(){
        return view('Admin.produk.show');
    }

}
