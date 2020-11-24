<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name_ar' => 'required|max:100|unique:offers,name_ar',
            'name_en' => 'required|max:100|unique:offers,name_en',
            'price' => 'required|numeric',
            'details_en' => 'required',
            'details_ar' => 'required'
        ];
    }
    public function messages(){
        return [
            'name_ar.required' => trans('messages.name_ar.required'),
            'name_en.required' => trans('messages.name_en.required'),
            'price.numeric' => 'سعر العرض يجب ان يكون متكونا من ارقام'
        ];
    }
}
