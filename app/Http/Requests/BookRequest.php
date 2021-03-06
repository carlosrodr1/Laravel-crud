<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'pages'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Coloque o título!',
            'pages.numeric'  => 'Coloque números para as páginas.',
        ];
    }
}
