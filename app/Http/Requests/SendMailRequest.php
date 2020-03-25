<?php

namespace App\Http\Requests;

use LVR\Phone\Phone;
use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email:rfc',
            'subject' => 'required',
            'phone' => ['required', new Phone],
            'message' => 'required|max:2000'
        ];
    }
}
