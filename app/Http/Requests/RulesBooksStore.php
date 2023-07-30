<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesBooksStore extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:64',
            'description' => 'required|string|max:3000',
            'year' => 'required|integer|min:1990|max:2014',
            'page_count' => 'required|integer|min:50|max:3000',
            'isbn' => 'required|string|min:10|max:30',
            'letter_id' => 'required|exists:letters,id',
            'binding_id' => 'required|exists:bindings,id',
            'format_id' => 'required|exists:formats,id',
            'language_id' => 'required|exists:languages,id',
            'publisher_id' => 'required|exists:publishers,id',
            'categories' => 'required|exists:categories,id',
            'authors' => 'required|exists:authors,id',
            'genres' => 'required|exists:genres,id'
        ];
    }
}
