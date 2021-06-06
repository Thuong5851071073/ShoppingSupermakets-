<?php
namespace Theme\Main\Http\Request;

use Platform\Support\Http\Requests\Request;


class InfoRequest extends Request
{
      /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        
        $rule = [
            'country' => 'required',
            'city' => 'required',
            'address' => 'required' ,
            'name' => 'required',
            'phone' =>'required',
            'email' =>'required|email',
            
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
            'country.required' => 'Vui lòng nhập quốc gia',
            'city.required' => 'Vui lòng nhập Thành Phố',
            'address.required' => 'Vui lòng nhập địa chỉ ',
            'name.required' => 'Vui lòng nhập quốc gia',
            'phone.required' => 'Vui lòng nhập quốc gia',

        ];
    }

}