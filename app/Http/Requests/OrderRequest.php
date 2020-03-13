<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'country'=>'required',
            'name'=>'required',
            'last_name'=>'required',
            'address_street'=>'required',
            'address_apartment'=>'required',
            'city'=>'required',
            'postcode'=>'required',
            'phone'=>'required|min:3',
            'email'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'country.required'=>'Поле страна является обязательным',
            'name.required'=>'Поле имя является обязательным',
            'last_name.required'=>'Поле фамилия является обязательным',
            'address_street.required'=>'Поле улица является обязательным',
            'address_apartment.required'=>'Поле дом является обязательным',
            'city.required'=>'Поле город является обязательным',
            'postcode.required'=>'Поле индекс является обязательным',
            'phone.required'=>'Поле телефон является обязательным'
            
        ];
    }
}
