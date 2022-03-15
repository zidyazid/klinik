<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Patient;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function cetak_data_obat()
    {
        $data['data_obat'] = Medicine::all();
        $pdf = PDF::loadView('report.cetak_data_obat', $data);
        return $pdf->stream('laporan-data-obat-pdf');
    }

    public function cetak_data_pasien()
    {
        $data['data_pasien'] = Patient::all();
        $pdf = PDF::loadView('report.cetak_data_pasien', $data);
        return $pdf->stream('laporan-data-pasien-pdf');
    }
}
