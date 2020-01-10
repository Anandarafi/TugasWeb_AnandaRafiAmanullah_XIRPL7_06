<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPelanggan extends Model
{
    protected $table="pelanggan";
    protected $primarykey="id_pelanggan";
    public $timestamps=false;
    protected $fillable = [
        'id_pelanggan',
        'nama',
        'alamat',
        'nohp',
        'username',
        'password',   
    ];

}
