<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelPeminjaman;
use Auth;
use Validator;

class Peminjaman extends Controller
{
    public function index()
    {
        $data['datas']=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('pelanggan','pelanggan.id_pelanggan','peminjaman.id_pelanggan')->get(); 
        return view('peminjaman',$data);
    }
    public function create()
    {
        $data=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('pelanggan','pelanggan.id_pelanggan','peminjaman.id_pelanggan')->get();
        return view('peminjaman_create',compact('data'));
    }
    public function store(Request  $request)
    {
        ModelPeminjaman::create([
            'id_mobil'      => $request->id_mobil,
            'id_pelanggan'     => $request->id_pelanggan,
            'tgl_sewa'      => $request->tgl_sewa,
            'tgl_kembali'      => $request->tgl_kembali,
        ]);
        
        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil Menyewa');
    }

    public function edit($id)
    {
        $data = ModelPeminjaman::where('id_peminjaman', $id)->get();
        return view('peminjaman_edit', compact('data'));
    }
    public function detail($id)
    {
        $data = ModelPeminjaman::where('id_peminjaman', $id)->join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('pelanggan','pelanggan.id_pelanggan','peminjaman.id_pelanggan')->get();
        return view('peminjaman_detail', compact('data'));
    }

    public function update(Request $request)
    {

        ModelPeminjaman::where('id_peminjaman', $request->id)->update([
            'id_mobil'      => $request->id_mobil,
            'id_pelanggan'  => $request->id_pelanggan,
            'tgl_sewa'      => $request->tgl_sewa,
            'tgl_kembali'   => $request->tgl_kembali,
        ]);
        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        ModelPeminjaman::where('id_peminjaman', $id)->delete();

        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil Menghapus Data');
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

    public function cetak_pdf()
    {
        set_time_limit(300); // Extends to 5 minutes. // Then return the PDF
        $peminjaman = ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->join('pelanggan','pelanggan.id_pelanggan','peminjaman.id_pelanggan')->get();

        $pdf = \PDF::loadview('Transaksi Peminjaman Mobil',['peminjaman'=>$peminjaman]);
        return $pdf->stream();

    }
}
