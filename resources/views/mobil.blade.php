@extends('layout.main')
@section('title', 'Data Mobil')
@section('container')

<br>
    <div class="container" id="report">
      <div class="col-xs-12">
        <div class="card">
          <div class="header">
            <h2 style="color:black;padding:10px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA MOBIL</h2>
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
                <td align="center">MERK MOBIL</td>
                <td align="center">PLAT NOMOR</td>
                <td align="center">WARNA MOBIL</td>
                <td align="center">BIAYA SEWA PERHARI</td>
                <td align="center">KETERANGAN</td>
                <td align="center">TAHUN PEMBUATAN</td>
                <td align="center">FOTO</td>
                <td align="center">AKSI</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->merk}}</td>
                <td align="center">{{$data->no_mobil}}</td>
                <td align="center">{{$data->warna}}</td>
                <td align="center">{{$data->biaya_perhari}}</td>
                <td align="center">{{$data->keterangan}}</td>
                <td align="center">{{$data->tahun}}</td>
                <td><img width="40" src="{{asset('images/'.$data->foto)}}"></td>
                <td><a href="{{url('/mobil/detail/'.$data->id_mobil)}}" class="btn btn-info btn-sm"><i class='fa fa-2x fa-file-text'></i></a>
                    <a href="{{url('/mobil/edit/'.$data->id_mobil)}}" class="btn btn-primary btn-sm"><i class='fa fa-2x fa-pencil-square'></i></a>
                    <a href="/mobil/hapus/{{ $data->id_mobil }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class='fa fa-2x fa-trash'></i></a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/mobil_create"class="btn btn-success">TAMBAH DATA</a>
          </div>
        </div>
      </div>
    </div>
    @stop
