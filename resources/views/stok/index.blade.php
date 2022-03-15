@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">
    <div class="text-grey">
        <h4>Tambah Data Stok</h4>
        <hr>
        <a href="/stok-create" class="btn btn-primary btn-sm">+ Tambah Data</a>
        <table class="table table-striped table-responsive mt-3">
            <thead>
                <th>ID Obat</th>
                <th>Quantity</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($stok as $v)
                    <tr>
                        <td>{{ $v->kode_obat }}</td>
                        <td>{{ $v->quantity }}</td>
                        <td>
                            <a href="stok-edit/{{ $v->id }}" class="btn btn-warning btn-sm">Edit</a>    
                            <a href="stok-delete/{{ $v->id }}" class="btn btn-danger btn-sm">Delete</a>    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
@endsection