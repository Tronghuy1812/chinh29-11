<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
   

            //
            return [
                'name' => 'required|min:6|max:255',
                'email' => 'required|email',
                'phone' => 'required|min:10',
                'password' => 'required| min:4| max:100 |confirmed',
                'password_confirmation' => 'required| min:4'
            ];

    }


}
