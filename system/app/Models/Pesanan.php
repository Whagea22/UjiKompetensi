<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Pesanan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'pesanan';

    protected $fillable = [
            'jenis_paket',
            'foto_produk',
            'harga',
            'tgl_input',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }


}

