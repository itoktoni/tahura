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
            'phone' => 'required',
            'gender' => 'required',
            'id_event' => 'required',
            'place_birth' => 'required',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'address' => 'required',
            'blood_type' => 'required',
            'emergency_name' => 'required',
            'kewarganegaraan' => 'required',
            'emergency_contact' => 'required',
            'jersey' => 'required',
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
