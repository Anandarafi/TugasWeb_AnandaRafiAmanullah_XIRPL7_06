<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelMobil;
use Auth;
use Validator;

class Mobil extends Controller
{

    public function index()
    {
        $data['datas']=ModelMobil::all(); 
        return view("mobil",$data);
    }
    public function create()
    {
        return view('mobil_create');
    }
    public function store(Request  $request)
    {
        ModelMobil::create([
            'merk'      => $request->merk,
            'no_mobil'     => $request->no_mobil,
            'warna'      => $request->warna,
            'biaya_perhari'      => $request->biaya_perhari,
            'keterangan'    => $request->keterangan,
            'stock'  => $request->stock,
            'tahun'  => $request->tahun,
            'foto' => $request->foto,
        ]);
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil Menambah Data');
    }

    public function edit($id)
    {
        $data = ModelMobil::where('id_mobil', $id)->get();
        return view('mobil_edit', compact('data'));
    }
    public function detail($id)
    {
        $data = ModelMobil::where('id_mobil', $id)->get();
        return view('mobil_detail', compact('data'));
    }
    public function detail1($id)
    {
        $data = ModelMobil::where('id_mobil', $id)->get();
        return view('mobil_detail1', compact('data'));
    }

    public function update(Request $request)
    {

        ModelMobil::where('id_mobil', $request->id)->update([
            'merk'      => $request->merk,
            'no_mobil'     => $request->no_mobil,
            'warna'      => $request->warna,
            'biaya_perhari'      => $request->biaya_perhari,
            'keterangan'    => $request->keterangan,
            'stock'  => $request->stock,
            'tahun'  => $request->tahun,
            'foto' => $request->foto,
        ]);
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        ModelMobil::where('id_mobil', $id)->delete();

        return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil Menghapus Data');
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
