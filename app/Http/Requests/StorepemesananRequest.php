<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepemesananRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'meja_id' => ['required', 'max:50', 'string'],
            'tanggal_pemesanan' => ['required', 'max:50', 'string'],
            'jam_mulai' => ['required', 'max:50', 'string'],
            'jam_selesai' => ['required', 'max:20', 'string'],
            'nama_pemesan' => ['required', 'max:50', 'string'],
            'jumlah_pelanggan' => ['required', 'max:50',]

        ];
    }
    public function messages()
    {
        return[
        'meja_id'.'required' => 'meja_id belum diisi!',
        'tanggal_pemesanan'.'required' => 'tanggal_pemesanan belum diisi!',
        'jam_mulai'.'required' => 'jam_mulai belum diisi!',
        'jam_selesai'.'required' => 'jam_selesai belum diisi!',
        'nama_pemesanan'.'required' => 'nama_pemesanan belum diisi!',
        'jumlah_pelanggan'.'required' => 'jumlah_pelanggan belum diisi!'
        
        ];

     }
    };
