<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RelationshipRequest extends FormRequest
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
            'first_name1' => 'required|string',
            'relationship1' => 'required|string',
            'gender1' => 'required',
            'date_birth1' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'first_name1' => 'First Name',
            'relationship1' => 'Relationship',
            'gender1' => 'Gender',
            'date_birth1' => 'Gender',
        ];
    }


}
