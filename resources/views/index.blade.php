@extends('layout.main')
@section('title','HOME')
@section('container')
<div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Mencari persewaan kendaraan<br>sesuai kebutuhan Anda.</h1>
                     <h4>Semua sangat mudah.</h4>
                     <hr>
                     <h4>Mobil yang Kami Miliki</h4>
               </div>
               @foreach($datas as $datas)
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{url('/mobil/detail1/'.$datas->id_mobil)}}">
                        <div class="box-img">
                           <h4>{{$datas->merk}}</h4>
                           <img src="{{asset('images/'.$datas->foto)}}">
                        </div>
                     </a>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="cat-main-box" style="margin-top:30px;">
      <br>
      <br>
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-8 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="{{ ('img/dompet.png') }}" class="icon-small" style="height:50px;">
                        <h4>Harga Bersahabat</h4>
                        <p>Harga sewa mobil termurah di Malang hanya ada di perusahaan kami, jangan ragu untuk menentukan rencana sewa mobil di Malang.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-8 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="{{ ('img/clock.png') }}" class="icon-small" style="height:50px;">
                        <h4>Buka 24 Jam</h4>
                        <p>Customer car kami, selain Online 24 jam full kami juga memberikan banyak pilihan mobil untuk kebutuhan Anda.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-8 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="{{ ('img/perisai.png') }}" class="icon-small" style="height:50px;">
                        <h4>Kwalitas Terbaik</h4>
                        <p>Persewaan mobil di Malang yang didukung dengan team profesional dan unit mobil yang variatif sehingga Anda tidak perlu ragu menentukan pilihan.
                        </p>
                     </div>
                  </div>
               </div>
               <br>
            </div>
            
         </div>

      </div>
@endsection
