<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'user_type' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'boss_list'=> 'sometimes|required',
            'employee_list'=> 'sometimes|required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'last_name.required' => 'Last Name is required!',
            'user_type.required' => 'User Type is required!',
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
        ];
    }
}
