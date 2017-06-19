<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DokterRequest extends Request
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
            'nama_dokter'=>'required|string|max:20',
            'kd_dokter'=>'required|string|size:4|unique:dokter,kd_dokter'
        ];
    }
}
