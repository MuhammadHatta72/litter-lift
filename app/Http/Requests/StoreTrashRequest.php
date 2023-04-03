<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrashRequest extends FormRequest
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
            'weight' => ['required', 'numeric', 'min:0'],
            'proof_of_weight' => ['required', 'mimes:jpg,jpeg,png', 'max:2048'],
            'message' => ['required', 'string', 'max:255'],
        ];
    }
}
