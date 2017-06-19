<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RawatInapRequest extends Request
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
            'no_trans' => 'required|string|size:4|unique:rawatinap,no_trans'
        ];
    }
}
