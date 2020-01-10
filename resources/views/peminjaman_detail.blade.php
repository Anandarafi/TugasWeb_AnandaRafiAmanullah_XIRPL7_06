@extends('layout.main')
@section('title', 'Detail Penyewa')
@section('container')

<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 text-align="center">Detail Sewa</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <table class="table table-striped">
            <tr>
                <th>ID PEMINJAMAN</th>
                <td>{{ $datas->id_peminjaman }}</td>
            </tr>
            <tr>
                <th>ID MOBIL</th>
                <td>{{ $datas->merk}}</td>
            </tr>
            <tr>
                <th>ID PELANGGAN</th>
                <td>{{ $datas->nama}}</td>
            </tr>
            <tr>
                <th>TANGGAL SEWA</th>
                <td>{{ $datas->tgl_sewa}}</td>
            </tr>
            <tr>
                <th>TANGGAL KEMBALI</th>
                <td>{{ $datas->tgl_kembali }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/peminjaman" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali Ke Masa Lalu?')">Kembali</a></td>
                    </tr>
</section>
@endsection 
