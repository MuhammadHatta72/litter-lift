<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
        $user = auth()->user();
        return [
            'name' => 'required|string',
            // 'username' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // 'gender' => 'required',
            // 'phone' => 'required|string',
            // 'address' => 'required|string',
            'image_new' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }
}
