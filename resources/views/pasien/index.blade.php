@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">

    <a href="/pasien-create" class="btn btn-primary mb-3">+ Tambah Data</a>
    <a href="/preview-data-pasien" class="btn btn-secondary mb-3">+ cetak data</a>
    <table class="table table-hover" id="medicinedatatable">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Gejala</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Riwayat Penyakit</th>
                <th>Obat</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $v)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->gejala }}</td>
                    <td>{{ $v->umur }}</td>
                    <td>{{ $v->alamat }}</td>
                    <td>{{ $v->riwayat_penyakit }}</td>
                    <td>{{ $v->obat }}</td>
                    <td>{{ $v->total_bayar }}</td>
                    <td>
                        <a href="/pasien-edit/{{ $v->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/pasien-delete/{{ $v->id }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection