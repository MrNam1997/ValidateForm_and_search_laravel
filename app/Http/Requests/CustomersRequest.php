<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'name'=>'required|min:25|max:30',
            'email'=>'required|email',
            'phone'=>'required|numeric|min:12|max:12',
            'address'=>'required|min:20|max:50',
            'birthday'=>'required',
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'Tên không được để trống!',
            'name.min'=> 'Dien it nhat 25 ki tu!',
            'name.max'=> 'Dien nhieu nhat 30 ki tu!',
            'email.required'=> 'Email khong duoc de trong!',
            'email.email'=> 'Hay dien dung dinh dang @gmail.com!',
            'phone.required'=> 'So dien thoai khong duoc de trong!',
            'phone.numeric'=> 'So dien thoai phai la dang so!',
            'phone.min'=>'so dien thoai co it nhat 12 so',
            'phone.max'=>'so dien thoai co nhieu nhat 12 so',
            'birthday.required'=>'Khong duoc de trong',
            'address.required'=>'Dia chi ko duoc de trong'
        ];
        return $messages;
    }
}
