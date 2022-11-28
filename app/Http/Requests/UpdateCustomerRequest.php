<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:50'],
            'kana' => ['required', 'max:255'],
            'tel' => ['required', 'max: 13'],
            'email'=> ['required', 'max:255'],
            'postcode' => ['required', 'max:7'],
            'address' => ['required', 'max:255'], 
            'birthday' => ['required', 'max:10'], 
            'gender' => ["in:0, 1, 2"],
            'memo' => ['required', 'max:255'],
        ];
    }
}
