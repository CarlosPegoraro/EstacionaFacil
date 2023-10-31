<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => [
                'required',
                'min:5'
            ],
            'email' => [
                // Ver no chat gpt **
                function () : string {
                    if (route('a') === '/login/create') {
                        return "required";
                        
                    }
                },
                'email'
            ],
            'password' => [
                'required',
                'min:8',
            ]
        ];
    }

    public function messages(): array {
        return [
          "name.required" => "O campo nome tem que ser preenchido",
          "name.min" => "O campo nome tem que ter ao menos :min caracteres",
          "email.required" => "O campo email deve ser preenchido",
          "email.email" => "O campo deve ser um email valido",
          "password.required" => "O campo senha deve ser preenchido",
          "password.min" => "O minimo de caracteres deve ser :min"
        ];
      }
}
