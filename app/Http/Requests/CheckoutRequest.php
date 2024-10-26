<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'first_name' => 'required|string',
            'email' => 'required|string|email',
            'gender' => 'required',
            'id_event' => 'required',
            'date_birth' => 'required',
            'confirmation' => 'accepted',
            'key' => 'string|unique:users,key,'.$this->user()->id,
        ];
    }

    public function messages(): array
    {
        return [
            'id_event.required' => 'Category Event is required',
            'confirmation' => 'Confirmation must Checked',
        ];
    }
}
