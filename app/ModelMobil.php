<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMobil extends Model
{
    protected $table="mobil";
    protected $primarykey="id_mobil";
    public $timestamps=false;
    protected $fillable = [
        'id_mobil',
        'merk',
        'no_mobil',
        'warna',
        'biaya_perhari',
        'keterangan',
        'tahun',
        'foto'   
    ];
    public function getFoto()
    {
        if($this->foto)
        {
            return asset('images/default.jpg');
        }
    }
}
