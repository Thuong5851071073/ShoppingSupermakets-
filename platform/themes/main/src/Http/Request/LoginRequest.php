<?php
namespace Theme\Main\Http\Request;

use Platform\Support\Http\Requests\Request;

class LoginRequest extends Request
{
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        $rule = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        return $rule;
    }

    /**
    * Get the message validate.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Địa chỉ email không hợp lệ',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
    }

}