<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            "email" => [
                "required",
                "max:255",
                "email:rfc,dns"
            ],
            "name" => [
                "required",
                "max:255"
            ],            
            "text" => [
                "required",
                "max:255"
            ],
            "visiteur" => [
                "ip",
                "max:255"
            ]
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            '*.max' => "L'email doit faire moins de 255 charactères",
            '*.required' => 'Tous les champs sont requis',
            'email.email' => 'Vous devez saisir un email valide'
        ];
    }
}
