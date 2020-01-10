@extends('layout.main')
@section('title', 'Tambah Mobil')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1 align="center" style="padding:10px;">TAMBAH DATA MOBIL</h1>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <li><strong>{{ $error }}</strong></li>
              @endforeach
            </div>
        @endif

        <form action="/mobil/store" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="merk">MERK MOBIL</label>
            <input type="text" class="form-control" id="merk" name="merk">
          </div>
          <div class="form-group">
            <label for="no_mobil">PLAT NOMOR MOBIL</label>
            <input type="text" class="form-control" id="no_mobil" name="no_mobil">
          </div>
          <div class="form-group">
            <label for="warna">WARNA MOBIL</label>
            <input type="text" class="form-control" id="warna" name="warna">
          </div>
          <div class="form-group">
            <label for="biaya_perhari">BIAYA SEWA PERHARI</label>
            <input type="text" class="form-control" id="biaya_perhari" name="biaya_perhari">
          </div>
          <div class="form-group">
            <label for="keterangan">KETERANGAN</label>
            <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
          </div>
          <div class="form-group">
            <label for="tahun">TAHUN PEMBUATAN</label>
            <input type="date" class="form-control" id="tahun" name="tahun">
          </div>
          <div class="form-group">
            <label for="foto">FOTO</label>
            <input type="file" class="form-control" id="foto" name="foto">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-plus'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/mobil" class="btn btn-md btn-warning"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
        </form>
      </div>
    </section>
    </div>
@endsection
