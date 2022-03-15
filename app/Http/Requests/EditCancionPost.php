<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCancionPost extends FormRequest
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
            'idUserCancion' => 'required',
            'titlemusic' => 'required|min:1|max:200',
            'artistmusic' => 'required|min:1|max:100',
            'descriptionmusic' => 'max:500',
            'category1music' => 'required',
            'category2music' => 'required',
            'category3music' => 'required',
            'totalreproductionmusic' => '',

        ];
    }
}
