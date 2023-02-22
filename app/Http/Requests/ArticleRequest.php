<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:10|max:50',
            'author' => 'required|min:10|max:50',
            'body' => 'required|min:10|max:5000',
        ];
    }
    public function messages(){
       return [
            'title.required'=>"Il titolo è obbligatorio",
            'author.required'=>"Il nome è obbligatorio",
            'body.required'=>"Il testo è obbligatorio",

            'title.min'=>"Il titolo è troppo corto deve essere piu lungo di 10 caratteri",
            'author.min'=>"Il nome è troppo corto deve essere piu lungo di 10 caratteri",
            'body.min'=>"Il testo è troppo corto deve essere piu lungo di 10 caratteri",

            'title.max'=>"Il titolo è troppo lungo deve essere massimo di 50 caratteri",
            'author.max'=>"Il nome è troppo lungo deve essere massimo di 50 caratteri",
            'body.max'=>"Il testo è troppo lungo deve essere massimo di 5000 caratteri",
       ]; 
    }
}
