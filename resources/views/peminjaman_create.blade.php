@extends('layout.main')
@section('title', 'SEWA MOBIL')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1 align="center">MENYEWA MOBIL</h1>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <li><strong>{{ $error }}</strong></li>
              @endforeach
            </div>
        @endif
        <form action="/peminjaman/store" method="post">
          {{ csrf_field() }}
          <div class="form-group">
          <label for="id_pelanggan">ID MOBIL</label>
          <input type="text" class="form-control" id="id_mobil" name="id_mobil" placeholder="ID MOBIL ADA DI DETAIL MOBIL">
          </div>
          <div class="form-group">
            <label for="id_pelanggan">ID PELANGGAN</label>
            <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="ID PELANGGAN 1=KENZIE;2=FAIZ">
          </div>
      
          <div class="form-group">
            <label for="tgl_sewa">TANGGAL SEWA</label>
            <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa">
          </div>
          <div class="form-group">
            <label for="tgl_kembali">TANGGAL KEMBALI</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-check'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/home" class="btn btn-success"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
          
          </form>
  

      </div>
    </section>
    </div>
@endsection
