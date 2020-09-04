<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinGetpinfeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'pin' => ['required', 'string'],
            'pin_value' => ['required', 'integer'],
            'pin_remaining_value' => ['required', 'integer'],
        ];
    }
}
