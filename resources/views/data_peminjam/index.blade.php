@extends('layout.master')
@section('content')
    <div class="container">
        <h4> Data Penerima</h4>
        <p allign="right"><a href="{{ route('data_peminjam.create') }}" class="btn btn-primary">Tambah Data Penerima Barang</a></p>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Type Barang</th>
                    <th>Jenis Barang</th>
                    <th>Merk Barang</th>
                    <th>Jumlah Barang</th>
                    <th> Serial Number</th>
                    <th>Kelengkapan Barang</th>
                    <th>Tanggal Penerimaan</th>
</tr>
</thead>
<tbody>
@foreach ($data_peminjam as $peminjam)
<tr>
    <td>{{ $peminjam->id}}</td>
    <td>{{ $peminjam->nama_pegawai}}</td>
    <td>{{ $peminjam->NIP}}</td>
    <td>{{ $peminjam->jabatan}}</td>
    <td>{{ $peminjam->type_barang}}</td>
    <td>{{ $peminjam->jenis_barang}}</td>
    <td>{{ $peminjam->merk_barang}}</td>
    <td>{{ $peminjam->serial_number}}</td>
    <td>{{ $peminjam->kelengkapan_barang}}</td>
    <td>{{ $peminjam->pekerjaan}}</th>
</tr>
@endforeach
</tbody>
</table>

<div class="pull-left">
    <strong>
        Jumlah Peminjam : {{ $jumlah_peminjam }}
</strong>
</div>

</div>
@endsection
