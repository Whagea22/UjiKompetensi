<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk_dekorasi;
use Illuminate\Http\Request;

class DekorasiController extends Controller
{
    function kirim(Request $req)
    {
        $produk_dekorasi = new Produk_dekorasi;
        $produk_dekorasi->jenis_produk = request('jenis_produk');
        $produk_dekorasi->alamat = request('alamat');
        $produk_dekorasi->harga = request('harga');
        $produk_dekorasi->tgl_input = request('tgl_input');
        $produk_dekorasi->Uploaddekorasi('foto_produk');
        $produk_dekorasi->save();

        return redirect('Admin/produk')->with('success', 'Data Dosen Berhasil Disimpan');
    }

}
