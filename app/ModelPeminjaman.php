<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table="peminjaman";
    protected $primarykey="id_peminjaman";
    public $timestamps=false;
    protected $fillable = [
        'id_peminjaman',
        'id_mobil',
        'id_pelanggan',
        'tgl_sewa',
        'tgl_kembali',
        'total'
    ];

    public function getFoto()
    {
        if($this->foto)
        {
            return asset('images/default.jpg');
        }
    }

}
