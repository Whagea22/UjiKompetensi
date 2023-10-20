<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Produk extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'produk';

    protected $fillable = [
            'jenis_paket',
            'foto_produk',
            'harga',
            'tgl_input',
    ];

    function UploadFotoProduk(){
        if(request()->hasFile('foto_produk')){
            $this->handleDelete();
            $foto_produk = request()->file('foto_produk');
            $destination = "produk";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto_produk->extension();
            $url = $foto_produk->storeAs($destination, $filename);
            $this->foto_produk = "app/".$url;
            $this->save;
        }
    }
    function handleDelete(){
        $foto_produk= $this->foto_produk;
        if($foto_produk){
            $path = public_path($foto_produk);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }

    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_produk');
    }



}

