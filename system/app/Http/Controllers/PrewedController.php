<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk_prewed;
use Illuminate\Http\Request;

class PrewedController extends Controller
{
    function simpan(Request $req)
    {
        $produk_prewed = new Produk_prewed;
        $produk_prewed->jenis = request('jenis');
        $produk_prewed->harga = request('harga');
        $produk_prewed->tgl_input = request('tgl_input');
        $produk_prewed->UploadPrewed('foto_produk');
        $produk_prewed->save();

        return redirect('Admin/produk')->with('success', 'Data Dosen Berhasil Disimpan');
    }

}
