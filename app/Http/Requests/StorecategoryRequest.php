<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            
            'nama' => ['required', 'max:20', 'string']
           
        ];
    }

    public function messages()
    { {
            return [
                
                'nama.required' => 'Nama Kayawan  belum diisi!'
               

            ];
        }
    }
}