<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Nhập vào đây này?',
            'content.required'=>'Nhập vào kia kìa?',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($this->input('title') == 'Hung'){
                $validator->errors()->add('title', 'Hùng khong được thêm ở đây.');
            }
        });
    }
}
