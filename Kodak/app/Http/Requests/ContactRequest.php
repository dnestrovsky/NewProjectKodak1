<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class ContactRequest extends FormRequest
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
            'message' => 'required|string|min:5|max:500',
            'name' => 'required|string|max:20',
            'phone' => 'required|string|numeric',
            'email' => 'nullable|string|email',
        ];
    }
}
