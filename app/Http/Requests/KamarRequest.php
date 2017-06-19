<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KamarRequest extends Request
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
            'kd_kamar'      => 'required|string|size:5|unique:kamar,kd_kamar',
            'nama_kamar'    => 'required|string|max:30',
            'fasilitas'     => 'required|string|max:30',
            'kelaskamar' => 'required|string|max:20'
        ];
    }
}
