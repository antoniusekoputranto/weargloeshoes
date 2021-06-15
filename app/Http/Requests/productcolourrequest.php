<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productcolourrequest extends FormRequest
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
            "name" => 'required',
            "price" => 'required',
            "size" => 'required',
            "colour" => 'required',
            "heel_height" => 'required',
	        "size_chart" => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> 'harus terisi',
            'price.required'=> 'harus terisi',
            'size.required'=> 'harus terisi',
            'colour.required'=> 'harus terisi',
            'heel_height.required'=> 'harus terisi',
	        'size_chart.required'=> 'harus terisi',
        ];
    }
}
