<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'alasan_cuti' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'alasan_cuti.required' => 'Alasan Cuti is required!',
            'tgl_awal.required' => 'tgl_awal is required!',
            'tgl_akhir.required' => 'tgl_akhir is required!'
        ];
    }
}
