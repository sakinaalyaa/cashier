<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreprodukTitipanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => ['required','max:20', 'string'],
            'nama_supplier' => ['required','max:20', 'string'],
            'harga_beli' => ['required', 'decimal', '10,2'],
            'harga_jual' => ['required', 'decimal', '10,2'],
            'stok' => ['required', 'integer'],
            'keterangan' => ['required','max:20', 'string'],
             
        ];
    }

    public function messages()
    { {
            return [
                'nama_produk' . 'required' => 'nama_produk belum diisi!',
                'nama_supplier' . 'required' => 'nama_supplier belum diisi!',
                'harga_beli' . 'required' => 'harga_beli belum diisi!',
                'harga_jual' . 'required' => 'harga_jual belum diisi!',
                'stok' . 'required' => 'stok belum diisi!',
                'keterangan' . 'required' => 'keterangan belum diisi!',
            ];
        }
    }
}

