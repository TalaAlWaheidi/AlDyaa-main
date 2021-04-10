<?php

namespace App\Http\Requests\Delivery\Areas;

use Illuminate\Foundation\Http\FormRequest;

class CreateAreaRequest extends FormRequest
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
            'name_ar' => ['required', 'max:255'],
            'name_en' => ['required', 'max:255'],
            'locality' => 'required|not_in:0',
            'delivery_price' => 'required|numeric'
        ];
    }
}
