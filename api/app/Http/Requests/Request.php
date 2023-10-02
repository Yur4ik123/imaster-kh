<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>'required',
            'msg'=>'required',
            'email'=>'required|email',
            'tel'=>'required',
            'request_type'=>'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
