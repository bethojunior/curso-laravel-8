<?php

namespace App\Http\Requests\Content;

use Illuminate\Foundation\Http\FormRequest;

class CreateContentRequest extends FormRequest
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
            'title'       => 'required|string',
            'description' => 'required|string'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return[
            'title.required'       => 'É preciso enviar um título',
            'description.required' => 'É preciso enviar uma descrição'
        ];
    }
}
