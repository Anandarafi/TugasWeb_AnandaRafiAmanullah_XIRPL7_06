@extends('layout.main')
@section('title', 'Tambah Pelanggan')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1 align="center" style="padding:10px;">TAMBAH DATA PELANGGAN</h1>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <li><strong>{{ $error }}</strong></li>
              @endforeach
            </div>
        @endif

        <form action="/pelanggan/store" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama">NAMA LENGKAP</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="form-group">
            <label for="nohp">NO HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
          </div>
          <div class="form-group">
            <label for="username">USERNAME</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">PASSWORD</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-plus'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/pelanggan" class="btn btn-md btn-warning"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
        </form>
      </div>
    </section>
    </div>
@endsection
