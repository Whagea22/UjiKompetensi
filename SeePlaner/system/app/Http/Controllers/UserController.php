<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $data['list_user'] = Admin::all();
        return view('Admin.user.index', $data);
    }

    function create(){
        return view('Admin.user.create');
    }

    function store(Request $req)
    {
        $user = new Admin;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->UploadFoto('profile');
        $user->save();

        return redirect('Admin/user')->with('success', 'Data Dosen Berhasil Disimpan');
    }


    function show(){
        return view('Admin.user.show');
    }

}
