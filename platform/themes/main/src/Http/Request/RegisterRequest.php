<?php
namespace Theme\Main\Http\Request;

use Platform\Support\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        $rule = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password',
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
            'name.required' => 'Vui lòng nhập tên của bạn',
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Địa chỉ email không hợp lệ!' ,
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu không nhỏ hơn 6 ký tự',
            'phone.required'=> 'số điện thoại không được để trống !',
            'passwordConfirm.required'=>'Không được để trống',
            'passwordConfirm.same' => ' Xác thực lại mật khẩu !',
        ];
    }

}