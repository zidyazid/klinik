@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">
    <div class="card-group">
        <div class="row">
            <div class="col-lg-6">
                <div class="card rounded-circle">
                  <div class="card-body px-5 py-5">
                    <h3 class="card-title">Jumlah Obat</h3>
                    <h2 class="card-title">{{ $jumlah_obat }}</h2>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection