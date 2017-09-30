<?php

namespace Gumball\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormRequest extends FormRequest
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
            'title' => 'nullable|string|max:5',
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'birthday' => 'required|date',
            'gender' => 'required|in:m,f,n',
            'phone' => 'required|min:7|max:20',
            'street' => 'required|max:255',
            'city' => 'required|max:255',
            'parish' => 'required|max:255'
        ];
    }
}
