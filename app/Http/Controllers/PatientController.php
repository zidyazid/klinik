<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = auth()->user();
        $data['title'] = "Halaman Pasien";
        $data['pasien'] = Patient::all();
        return view('pasien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = auth()->user();
        $data['medicine'] = Medicine::all();
        $data['title'] = "Halaman Pasien";
        return view('pasien.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $medicine = Medicine::where('nama_obat', '=', $request->obat)->get();

        $total = $medicine[0]->harga * $request->qty;
        $sisaObatTersedia = $medicine[0]->qty_in - $request->qty;

        Patient::create([
            'nama' => $request->nama,
            'gejala' => $request->gejala,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'obat' => $request->obat,
            'quantity' => $request->qty,
            'total_bayar' => $total,
        ]);

        Medicine::where('nama_obat', '=', $request->obat)->update([
            'qty_in' => $sisaObatTersedia
        ]);

        return redirect('/pasien')->with('success', 'Data berhasil ditambahkan');
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
        $data['medicine'] = Medicine::all();
        $data['title'] = "Halaman Edit Data Pasien";
        $data['pasien'] = Patient::find($id);
        return view('pasien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $medicine = Medicine::where('nama_obat', '=', $request->obat)->get();


        $total = $medicine[0]->harga * $request->qty;
        Patient::find($id)->update([
            'nama' => $request->nama,
            'gejala' => $request->gejala,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'obat' => $request->obat,
            'quantity' => $request->qty,
            'total_bayar' => $total,
        ]);

        $stokreback = $medicine[0]->qty_in + $medicine[0]->qty_after_updated;
        Medicine::where('nama_obat', '=', $request->obat)->update([
            'qty_in' => $stokreback
        ]);

        return redirect('/pasien')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();
        return redirect('/pasien')->with('success', 'Data berhasil dihapus');
    }
}
