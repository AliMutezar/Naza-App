<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // kalo request ngga perlu login, diubah aja jadi true biar ngga forbidden 403
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
            'name' => 'required|max:255|string',
            'phone' => 'required|max:20',
            'email' => 'required|email|unique:users,email',
            'message' => 'required|regex:/^\S.*\S$/',
            'service_id' => 'required',
        ];
    }
}
