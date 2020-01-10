@extends('layout.main')
@section('title', 'Detail Mobil')
@section('container')

<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL MOBIL</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <div class="profile-main" align="center">
   <img src="{{asset('images/'.$datas->foto)}}" class="img-circle" alt="Foto" style="height:250px;">
   <h3 class="name">{{ $datas->merk }}</h3>
    </div>
    <table class="table table-striped">
            <tr>
                <th>Id Mobil</th>
                <td>{{ $datas->id_mobil }}</td>
            </tr>
            <tr>
                <th>Plat Nomor Mobil</th>
                <td>{{ $datas->no_mobil }}</td>
            </tr>
            <tr>
                <th>Warna Mobil</th>
                <td>{{ $datas->warna }}</td>
            </tr>
            <tr>
                <th>Biaya Sewa Perhari</th>
                <td>{{ $datas->biaya_perhari }}</td>
            </tr>
            <tr>
                <th>Keterangan Mobil</th>
                <td>{{ $datas->keterangan }}</td>
            </tr>
            <tr>
                <th>Tahun Pembuatan Mobil</th>
                <td>{{ $datas->tahun }}</td>
            </tr>
        </table>
                    <tr>
                    <td><a href="/home" class="btn btn-danger">Kembali</a></td>
                    <td><a href="/peminjaman_create" class="btn btn-success">SEWA</a></td>
                    </tr>
</section>
@endsection 
