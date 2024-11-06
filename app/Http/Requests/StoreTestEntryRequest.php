<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestEntryRequest extends FormRequest
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
        $rules = [
            'signal_strength_2g' => 'required|numeric|between:-100,0',
            'signal_strength_5g' => 'required|numeric|between:-100,0',
            'speed_2g' => 'required|numeric|between:0,100',
            'speed_5g' => 'required|numeric|between:0,1000',
            'interference' => 'required|numeric|between:-100,0',
        ];

        if ($this->isMethod('POST')) {
            $rules['room_id'] = 'required|exists:rooms,id';
        }

        return $rules;
    }
}
