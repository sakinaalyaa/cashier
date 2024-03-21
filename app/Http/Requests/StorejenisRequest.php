<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorejenisRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama_jenis' => 'required',
            'category_id' => 'required'
        ];
    }
    public function messages()
    { {
            return [

                'nama_jenis.required' => 'Nama  belum diisi!',
                'category_id.required' => 'Nama  belum diisi!',


            ];
        }
    }
}
