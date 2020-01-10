@extends('layout.main')
@section('title', 'Detail Pelanggan')
@section('container')

<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL PELANGGAN</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <table class="table table-striped">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $datas->nama }}</td>
            </tr>
            <tr>
                <th>Alamat Pelanggan</th>
                <td>{{ $datas->alamat }}</td>
            </tr>
            <tr>
                <th>No Hp Pelanggan</th>
                <td>{{ $datas->nohp }}</td>
            </tr>
            <tr>
                <th>Username Pelanggan</th>
                <td>{{ $datas->username }}</td>
            </tr>
            <tr>
                <th>Password Pelanggan</th>
                <td>{{ $datas->password }}</td>
            </tr>
        </table>
                    <tr>
                    <td><a href="/pelanggan" class="btn btn-danger">Kembali</a></td>
                    </tr>
</section>
@endsection 
