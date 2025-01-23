<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer|min:1',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo del libro è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa valida.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'description.string' => 'La descrizione deve essere una stringa valida.',
            'description.max' => 'La descrizione non può superare gli 800 caratteri.',
            'pages.integer' => 'Il numero di pagine deve essere un numero intero.',
            'pages.min' => 'Il numero di pagine deve essere almeno 1.',
            'author_id.required' => 'L\'autore del libro è obbligatorio.',
            'author_id.exists' => 'L\'autore selezionato non esiste.',
            'category_id.required' => 'La categoria del libro è obbligatoria.',
            'category_id.exists' => 'La categoria selezionata non esiste.',
        ];
    }
}
