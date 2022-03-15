@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">

    {{-- <a href="/obat-create" class="btn btn-primary mb-3">+ Tambah Data</a> --}}
    <a href="/preview-data-obat" class="btn btn-secondary mb-3"><i class="fas fa-print"></i> Cetak Data</a>
    <table class="table table-hover table-responsive" id="medicinedatatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Obat</th>
                <th>Indikasi</th>
                <th>Kategori</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Jumlah</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->nama_obat }}</td>
                    <td>{{ $v->indikasi }}</td>
                    <td>{{ $v->kategori }}</td>
                    <td>{{ $v->jenis }}</td>
                    <td>{{ $v->harga }}</td>
                    <td>{{ $v->qty_in }}</td>
                    {{-- <td>
                        <a href="/obat-edit/{{ $v->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/obat-delete/{{ $v->id }}" class="btn btn-danger btn-sm">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection