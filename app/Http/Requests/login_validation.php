<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login_validation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code_melli'=>['numeric','required'],
            'birth'=>['numeric'],
        ];
    }
    public function messages(){
        return[
            'code_melli.required'=>'کد ملی خود را نکردید',
            'code_melli.numeric'=>'کد ملی خود را بصورت عددی وارد نمایید',
            'birth.numeric'=>'تاریخ تولد خود را بصورت کامل و در قالب یک عدد6 رقمی وارد کنید',
        ];
    }
}
