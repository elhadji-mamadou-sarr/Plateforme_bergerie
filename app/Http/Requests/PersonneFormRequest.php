<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneFormRequest extends FormRequest
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
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'email' => ['required', 'string'],
            'profil' => ['nullable', 'string'],
            'telephone' => ['required', 'integer'],
            'ville' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'per' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
        ];
    }
}
