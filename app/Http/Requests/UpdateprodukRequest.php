<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateprodukRequest extends FormRequest
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
            'harga_beli' => ['required', 'decimal', 'max:99999999999999999999'],
            'harga_jual' => ['required', 'decimal', 'max:99999999999999999999'],
            'stok' => ['required', 'integer'],
            'keterangan' => ['required','max:20', 'string'],
        ];
    }
}
