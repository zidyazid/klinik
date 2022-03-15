<?php

namespace App\Http\Controllers;

use App\Models\Addstock;
use App\Models\Medicine;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stok'] = Addstock::all();
        $data['user'] = auth()->user();
        $data['title'] = "Halaman Penambahan Stok Obat";
        return view('stok.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = auth()->user();
        $data['title'] = "Halaman Penambahan Stok Obat";
        $data['medicine'] = Medicine::all();
        return view('stok.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ambil data stok obat dari table obat saat ini
        $request->validate([
            'nama_obat' => 'required',
            'qty' => 'required',
        ]);
        $obat = Medicine::find($request->nama_obat);
        // tambahkan jumlah stok tersedia dengan qty
        $total = $obat->qty_in + $request->qty;

        // tambah data penambahan
        Addstock::create([
            'kode_obat' => $request->nama_obat,
            'quantity' => $request->qty,
        ]);

        // update data stok obat
        Medicine::where('id', $request->nama_obat)->update([
            'qty_in' => $total,
            'qty_after_updated' => $request->qty,
        ]);

        // redirect ke halaman stok
        return redirect('stok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = auth()->user();
        $data['title'] = "Halaman Perubahan Stok Obat";
        $data['medicine'] = Medicine::all();
        $data['stok'] = Addstock::find($id);
        return view('stok.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ambil data stok obat dari table obat saat ini
        $request->validate([
            'nama_obat' => 'required',
            'qty' => 'required',
        ]);
        $obat = Medicine::find($request->nama_obat);
        // tambahkan jumlah stok tersedia dengan qty
        $qty_reback = $obat->qty_in - $obat->qty_after_updated;
        $total = $qty_reback + $request->qty;

        // tambah data penambahan
        Addstock::where('id', $id)->update([
            'kode_obat' => $request->nama_obat,
            'quantity' => $request->qty,
        ]);

        // update data stok obat
        Medicine::where('id', $request->nama_obat)->update([
            'qty_in' => $total,
            'qty_after_updated' => $request->qty,
        ]);

        // redirect ke halaman stok
        return redirect('stok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Addstock::destroy($id);
        return redirect('/stok');
    }
}
