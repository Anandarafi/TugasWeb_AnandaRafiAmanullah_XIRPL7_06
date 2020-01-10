<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelPelanggan;
use Auth;
use Validator;

class Pelanggan extends Controller
{

    public function index()
    {
        $data['datas']=ModelPelanggan::all(); 
        return view("pelanggan",$data);
    }
    public function create()
    {
        return view('pelanggan_create');
    }
    public function store(Request  $request)
    {
        ModelPelanggan::create([
            'nama'      => $request->nama,
            'alamat'     => $request->alamat,
            'nohp'      => $request->nohp,
            'username'      => $request->username,
            'password'    => $request->password,
        ]);
        
        return redirect()->action('Pelanggan@index')->with('alert_message', 'Berhasil Menambah Data');
    }

    public function edit($id)
    {
        $data = ModelPelanggan::where('id_pelanggan', $id)->get();
        return view('pelanggan_edit', compact('data'));
    }
    public function detail($id)
    {
        $data = ModelPelanggan::where('id_pelanggan', $id)->get();
        return view('pelanggan_detail', compact('data'));
    }

    public function update(Request $request)
    {

        ModelPelanggan::where('id_pelanggan', $request->id)->update([
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'nohp'          => $request->nohp,
            'username'      => $request->username,
            'password'      => $request->password,
        ]);
        return redirect()->action('Pelanggan@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        ModelPelanggan::where('id_pelanggan', $id)->delete();

        return redirect()->action('Pelanggan@index')->with('alert_message', 'Berhasil Menghapus Data');
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
