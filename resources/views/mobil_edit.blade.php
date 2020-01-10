 @extends('layout.main')
@section('title','Edit Data Mobil')
@section('container')
<div class="container">
    <section class="main-section">
      <div class="content">
        <h1  align="center" style="padding:10px;">UBAH DATA MOBIL</h1>
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
        <form action="/mobil/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_mobil }}"><br>
          <div class="form-group">
            <label for="merk">Merk Mobil</label>
            <input type="text" class="form-control" id="merk" name="merk" value="{{ $datas->merk }}">
          </div>
          <div class="form-group">
            <label for="no_mobil">Plat Nomor Mobil</label>
            <input type="text" class="form-control" id="no_mobil" name="no_mobil" value="{{ $datas->no_mobil }}">
          </div>
          <div class="form-group">
            <label for="warna">Warna Mobil</label>
            <input type="text" class="form-control" id="warna" name="warna" value="{{ $datas->warna }}">
          </div>
          <div class="form-group">
            <label for="biaya_perhari">Biaya Sewa Perhari</label>
            <input class="form-control" id="biaya_perhari" name="biaya_perhari" value="{{ $datas->biaya_perhari }}">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan Mobil</label>
            <input class="form-control" id="keterangan" name="keterangan" value="{{ $datas->keterangan }}">
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Pembuatan Mobil</label>
            <input type="date" class="form-control" id="tahun" name="tahun" value="{{ $datas->tahun }}">
          </div>
          <div class="form-group">
            <label for="foto">Foto Mobil</label>
            <input type="file" class="form-control" id="foto" name="foto" value="{{ $datas->foto }}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary"><i class='fa fa-2x fa-check'></i></button>
            <button type="reset" class="btn btn-md btn-danger"><i class='fa fa-2x fa-refresh'></i></button>
            <td><a href="/mobil" class="btn btn-md btn-warning"><i class='fa fa-2x fa-home'></i></a></td>
          </div>
        </form>
        @endforeach
      </div>
    </section>
    </div>
@endsection
