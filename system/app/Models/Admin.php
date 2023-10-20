<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'user';

    protected $fillable = [
            'nama',
            'nip',
            'password',
            'profile',
            'email',
    ];

    function UploadFoto(){
        if(request()->hasFile('profile')){
            $this->handleDelete();
            $profile = request()->file('profile');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$profile->extension();
            $url = $profile->storeAs($destination, $filename);
            $this->profile = "app/".$url;
            $this->save;
        }
    }
    function handleDelete(){
        $profile= $this->profile;
        if($profile){
            $path = public_path($profile);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }



}

