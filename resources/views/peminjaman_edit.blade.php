@extends('layout.main')
@section('title','Edit Sewa Mobil')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1 align="center">Ubah Data Sewa Mobil</h1>
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
        <form action="/peminjaman/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_peminjaman }}"><br>
          <div class="form-group">
            <label for="id_mobil">ID Mobil</label>
            <input type="text" class="form-control" id="id_mobil" name="id_mobil" value="{{ $datas->id_mobil }}" disabled>
          </div>
          <div class="form-group">
            <label for="id_pelanggan">ID PELANGGAN</label>
            <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="{{ $datas->id_pelanggan }}">
          </div>
          <div class="form-group]">
            <label for="tgl_sewa">TANGGAL SEWA</label>
            <input class="form-control" id="tgl_sewa" name="tgl_sewa" value="{{ $datas->tgl_sewa }}">
          </div>
          <div class="form-group">
            <label for="tgl_kembali">TANGGAL KEMBALI</label>
            <input class="form-control" id="tgl_kembali" name="tgl_kembali" value="{{ $datas->tgl_kembali }}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-check'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/peminjaman" class="btn btn-md btn-warning"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
        </form>
        @endforeach
      </div>
    </section>
    </div>
@endsection
