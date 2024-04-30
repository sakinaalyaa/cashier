<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreabsensiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'nama_karyawan' => 'required',
            'tanggal_masuk' => 'required',
            'waktu_masuk' => 'required',
            'status' => 'required',
            'waktu_keluar' => 'required',
        ];
    }
    public function messages()
    { {
            return [

                'nama_karyawan.required' => 'Nama Karyawan belum diisi!',
                'tanggal_masuk.required' => 'Tanggal Masuk belum diisi!',
                'waktu_masuk.required' => 'Waktu Masuk  belum diisi!',
                'status.required' => 'Status  belum diisi!',
                'waktu_keluar.required' => 'Waktu Keluar belum diisi!',
            ];
        }
    }
}
