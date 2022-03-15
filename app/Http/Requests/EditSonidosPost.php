<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSonidosPost extends FormRequest
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
            'idUserSonidos' => 'required',
            'titlesound' => 'required|min:1|max:200',
            'descriptionsound' => 'max:500',
            'category1sound' => 'required',
            'category2sound' => 'required',
            'category3sound' => 'required',
            'totalreproductionsound' => '',
        ];
    }
}
