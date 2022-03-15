<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Requests\MedicineRequest;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Contracts\DataTable;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Medicine::latest()->get());
        $data['jumlah_obat'] = Medicine::count();
        // dd($data);
        $data['user'] = auth()->user();
        $data['title'] = "Dashboard";
        $data['medicines'] = Medicine::get();
        return view('dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Tambah Data Obat";
        return view('dashboard.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'kategori' => 'required',
            'indikasi' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);

        Medicine::create($request->all());
        return redirect('/')->with('success', 'Data berhasil ditambahkan');
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
        $data['title'] = "Edit Data Obat";
        $data['medicine'] = Medicine::find($id);
        return view('dashboard.edit', $data);
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
        $request->validate([
            'nama_obat' => 'required',
            'kategori' => 'required',
            'indikasi' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);

        Medicine::find($id)->update($request->all());
        return redirect('/')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicine::find($id)->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }

    public function data_obat()
    {
        $data['title'] = "Preview Data Obat";
        $data['medicines'] = Medicine::get();
        return view('dashboard.preview', $data);
    }

    public function data_pasien()
    {
        $data['title'] = "Preview Data Pasien";
        $data['medicines'] = Medicine::get();
        return view('dashboard.preview', $data);
    }
}
