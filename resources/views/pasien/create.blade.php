@extends('layout.master')

@section('content')
<div class="inbox-text-list sm-res-mg-t-30">
    <form method="post" action="pasien-store">
        @csrf
            <div class="form-example-wrap">
                <div class="cmp-tb-hd">
                    <h2>Tambah Data</h2>
                </div>
                <div class="form-example-int">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="nama" name="nama">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="gejala">Gejala</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="gejala" name="gejala">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="umur" name="umur">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="alamat" name="alamat">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="riwayat_penyakit">Riwayat Penyakit</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="riwayat_penyakit" name="riwayat_penyakit">
                        </div>
                    </div>
                </div>        
                <div class="form-group mg-t-15">
                    <label for="obat">Obat</label>
                    <select class="form-control" id="obat" name="obat">
                      @foreach ($medicine as $v)
                          <option value="{{ $v->nama_obat }}">{{ $v->nama_obat }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="form-group">
                        <label for="qty">Jumlah</label>
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" id="qty" name="qty">
                        </div>
                    </div>
                </div>     
                <div class="form-group mg-t-15">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        
    </form>
</div>
@endsection