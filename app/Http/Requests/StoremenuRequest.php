<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoremenuRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'jenis_id' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'deskripsi' => 'required'
        ];
    }
    public function messages()
    { {
            return [

                // 'nama_jenis.required' => 'Nama  belum diisi!',
                'jenis_id' . 'required' => 'jenis_id belum diisi!',
                'nama_menu' . 'required' => 'nama_menu belum diisi!',
                'harga' . 'required' => 'harga belum diisi!',
                'image' . 'required' => 'image belum diisi!',
                'deskripsi' . 'required' => 'deskripsi belum diisi!',


            ];
        }
    }
}
