<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required|min:5|max:500',
            'email'=>'required|min:5|max:255|email|string|unique:users,email,'.$this->route('user')->id,//especificamos el id del usuario que le haremos excepcion para que pueda editar su perfil sin modificar el email
            'password'=>'required|min:5|confirmed',
            'ci'=>'required|max:10',
            'telf'=>'max:10',
            'rol_id'=>'required',
        ];
    }
}
