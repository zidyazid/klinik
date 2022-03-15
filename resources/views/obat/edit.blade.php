@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">
    <form method="post" action="obat-update/{{ $medicine->id }}">
        @method('put')
        @csrf
            <div class="form-example-wrap">
                <div class="cmp-tb-hd">
                    <h2>Edit Data</h2>
                </div>
                <div class="form-example-int">
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="nama_obat" name="nama_obat" value="{{ $medicine->nama_obat }}">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="indikasi">Indikasi</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="indikasi" name="indikasi"value="{{ $medicine->indikasi }}">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="harga" name="harga" value="{{ $medicine->harga }}">
                        </div>
                    </div>
                </div>
                <div class="form-group mg-t-15">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" value="{{ $medicine->kategori}}">
                      <option value="Generik">Generik</option>
                      <option value="Non Generik">Non Generik</option>
                    </select>
                </div>
                <div class="form-group mg-t-15">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" id="jenis" name="jenis" value="{{ $medicine->jenis}}">
                      <option value="Sirup">Sirup</option>
                      <option value="Tablet">Tablet</option>
                      <option value="Pil">Pil</option>
                      <option value="Kapsul">Kapsul</option>
                    </select>
                </div>
                <div class="form-group mg-t-15">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        
    </form>
</div>
@endsection