<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CritterRequest extends FormRequest
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
			'name' => 'required|string',
			'species' => 'required|string',
			'type_1' => 'required|string',
			'type_2' => 'string',
			'type_3' => 'string',
			'description' => 'required|string',
			'region' => 'required|string',
			'user_id' => 'required',
			'encounter_difficulty' => 'required',
			'sound' => 'required|string',
        ];
    }
}
