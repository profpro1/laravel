<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'email'=> 'required|email',
                'name'=> 'required',
                'subject' => 'required|min:5|max:50',
                'message' => 'required',

        ];
    }
//    public function attributes()
//    {
//        return [
//            'name'=>'Имя',
//        ];
//    }

    public function messages()
    {
        return [
            'name.required' =>'Поле имя должно быть обязательным',
            'email.required' =>'Поле email быть обязательным',
            'subject.required' =>'Поле тема должно быть обязательным',
            'message.required' =>'Поле сообщение быть обязательным',
        ];
    }
}
