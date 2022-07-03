<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'price'=>'required|integer|min:1|max:100',
        ];
    }
}
