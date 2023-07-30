<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesCategories extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Inicijalno false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'   => 'required|min:2|max:30',
            'description' => 'min:0|max:100',
            
        ];
    }
}
