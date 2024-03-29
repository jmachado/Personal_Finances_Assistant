<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditUserProfileRequest extends FormRequest
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
        $user = Auth::user();
        return [
            'name' => 'required|string|max:255|regex:/^[\pL\s]+$/u',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'phone' => 'nullable|regex:/^(\+?)([0-9] ?){9,20}$/',
            'profile_photo' => 'mimes:jpeg,jpg,png|nullable|max:1999|file',
            [
                'phone.regex' => 'Invalid Format',
            ]
        ];
    }
}
