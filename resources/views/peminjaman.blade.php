@extends('layout.main')
@section('title', 'Data Peminjaman')
@section('container')
<br>
    <div class="container" id="report">
      <div class="col-xs-12">
        <div class="card">
          <div class="header">
          <br>
            <h2 align="center">Sewa Mobil</h2>
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
                <td>Aksi</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr>
                <td>{{$data->merk}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->tgl_sewa}}</td>
                <td>{{$data->tgl_kembali}}</td>
                <td><a href="{{url('/peminjaman/detail/'.$data->id_peminjaman)}}" class="btn btn-success"><i class='fa fa-2x fa-file-text'></i></a>
                    <a href="{{url('/peminjaman/edit/'.$data->id_peminjaman)}}" class="btn btn-warning"><i class='fa fa-2x fa-pencil-square'></i></a>
                    <a href="{{url('/peminjaman/hapus/'.$data->id_peminjaman)}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class='fa fa-2x fa-trash'></i></a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/peminjaman/cetak_pdf" class="btn btn-success" target="_blank">CETAK TRANSAKSI</a>
            <a href="/pengembalian" class="btn btn-success" target="_blank">PENGEMBALIAN</a>
          </div>
        </div>
      </div>
    </div>
    @stop
