<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'gejala' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'riwayat_penyakit' => 'required',
            'obat' => 'required',
            'qty' => 'required|integer',
        ];
    }
}
