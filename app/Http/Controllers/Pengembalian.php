<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelPeminjaman;
use Auth;
use Validator;

class Pengembalian extends Controller
{
    public function index()
    {
        $data['datas']=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('pelanggan','pelanggan.id_pelanggan','peminjaman.id_pelanggan')->get(); 
        return view("pengembalian",$data);
    }
    public function kembali($id)
    {
        ModelPeminjaman::where('id_peminjaman', $id)->delete();

        return redirect()->action('Peminjaman@index')->with('alert_message', 'SUDAH KEMBALI');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
