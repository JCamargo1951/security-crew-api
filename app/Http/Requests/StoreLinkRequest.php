<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'max:2048'],
            'shortener_url' => [
                'required',
                'alpha_dash',
                'max:50',
                'unique:links,shortener_url'
            ],
            'visibility' => ['required', 'in:public,private'],
            'expires_at' => ['nullable', 'date', 'after:now'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
