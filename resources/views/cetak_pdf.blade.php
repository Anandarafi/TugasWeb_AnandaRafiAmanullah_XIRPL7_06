<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN PDF KONTAK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size :9pt;
    }
    </style>
            <center>
            <h3 class="text-center">TRANSAKSI PEMINJAMAN MOBIL</h3>
            <h5 class="text-center">PERSEWAAN MOBIL.com</h5>
            </center>

            <table class="table table-bordered">
            <thead>
                    <tr>
                        <td align="center">NO</td>
                        <td align="center">ID PEMINJAMAN</td>
                        <td align="center">MERK MOBIL</td>
                        <td align="center">NAMA PELANGGAN</td>
                        <td align="center">TANGGAL PEMINJAMAN</td>
                        <td align="center">TANGGAL KEMBALI</td>
                    </tr>
                    </thead>
                        @php $no=0; @endphp
                        @foreach($peminjaman as $data)
                        @php $no++; @endphp
                        <tbody>
                    <tr>
                        <td align="center">{{$no}}</td>
                        <td align="center">{{$data->id_peminjaman}}</td>
                        <td align="center">{{$data->merk}}</td>
                        <td align="center">{{$data->nama}}</td>
                        <td align="center">{{$data->tgl_sewa}}</td>
                        <td align="center">{{$data->tgl_kembali}}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
    </div>
        
</body>
    </html>
     