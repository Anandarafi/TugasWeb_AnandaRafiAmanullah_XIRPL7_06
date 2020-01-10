@extends('layout.main')
@section('title', 'Data Peminjaman')
@section('container')
<br>
    <div class="container" id="report">
      <div class="col-xs-12">
        <div class="card">
          <div class="header">
          <br>
            <h2 align="center">Data Peminjaman Mobil</h2>
            <br>
          </div>
          <div class="body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <table class="table table-dark table-striped">
              <tr>
                <td>ID MOBIL</td>
                <td>ID PELANGGAN</td>
                <td>TANGGAL SEWA</td>
                <td>TANGGAL KEMBALI</td>
                <td>AKSI</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr>
                <td>{{$data->merk}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->tgl_sewa}}</td>
                <td>{{$data->tgl_kembali}}</td>
                <td>
                    <a href="{{url('/pengembalian/kembali/'.$data->id_peminjaman)}}" class="btn btn-danger" >SUDAH KEMBALI</a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/pengembalian" class="btn btn-success">KEMBALI</a>
          </div>
        </div>
      </div>
    </div>
    @stop
