@extends('layout.main')
@section('title', 'Data Pelanggan')
@section('container')

<br>
    <div class="container" id="report">
      <div class="col-xs-12">
        <div class="card">
          <div class="header">
            <h2 style="color:black;padding:10px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA PELANGGAN</h2>
          </div>
          <div class="body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <table class="table table-default table-striped" style="background :#7F8C8D;">
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;font-size:10pt;" >
                <td align="center">NO</td>
                <td align="center">NAMA PELANGGAN</td>
                <td align="center">ALAMAT PELANGGAN</td>
                <td align="center">NO HP PELANGGAN</td>
                <td align="center">USERNAME PELANGGAN</td>
                <td align="center">PASSWORD PELANGGAN</td>
                <td align="center">AKSI</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->nama}}</td>
                <td align="center">{{$data->alamat}}</td>
                <td align="center">{{$data->nohp}}</td>
                <td align="center">{{$data->username}}</td>
                <td align="center">{{$data->password}}</td>
                <td><a href="{{url('/pelanggan/detail/'.$data->id_pelanggan)}}" class="btn btn-info btn-md"><i class='fa fa-2x fa-file-text'></i></a>
                    <a href="{{url('/pelanggan/edit/'.$data->id_pelanggan)}}" class="btn btn-primary btn-md"><i class='fa fa-2x fa-pencil-square'></i></a>
                    <a href="{{url('/pelanggan/hapus/'.$data->id_pelanggan)}}" class="btn btn-danger btn-md" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class='fa fa-2x fa-trash'></i></a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/pelanggan_create"class="btn btn-success">TAMBAH DATA</a>
          </div>
        </div>
      </div>
    </div>
    @stop
