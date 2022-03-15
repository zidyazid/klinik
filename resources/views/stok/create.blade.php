@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">
    <form method="post" action="/stok-store">
        @csrf
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <select class="form-control" id="nama_obat" name="nama_obat">
              @foreach ($medicine as $v)
                  <option value="{{ $v->id }}">{{ $v->nama_obat }}</option>
              @endforeach
            </select>
          </div>
        <div class="form-example-int mg-t-15">
            <div class="form-group">
                <label for="qty">Quantity</label>
                <div class="nk-int-st">
                    <input type="text" class="form-control input-sm" id="qty" name="qty">
                </div>
            </div>
        </div>
        <div class="form-example-int mg-t-15">
            <div class="form-group">
               <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection