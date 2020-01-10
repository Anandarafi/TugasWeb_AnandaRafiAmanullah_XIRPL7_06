@extends('layout.main')
@section('title','Edit Data Pelanggan')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1  align="center" style="padding:10px;">UBAH DATA PELANGGAN</h1>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
        @endif

        @foreach($data as $datas)
        <form action="/pelanggan/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_pelanggan }}"><br>
          <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $datas->nama }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Pelanggan</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datas->alamat }}">
          </div>
          <div class="form-group">
            <label for="nohp">No HP Pelanggan</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $datas->nohp }}">
          </div>
          <div class="form-group">
            <label for="biaya_perhari">Username Pelanggan</label>
            <input class="form-control" id="username" name="username" value="{{ $datas->username }}">
          </div>
          <div class="form-group">
            <label for="password">Password Pelanggan</label>
            <input class="form-control" id="password" name="password" value="{{ $datas->password }}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-check'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/pelanggan" class="btn btn-md btn-warning"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
        </form>
        @endforeach
      </div>
    </section>
    </div>
@endsection
