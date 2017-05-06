<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;

class UserRequest extends BaseRequest
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
            'name' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'aisibi',
        ];
    }
    protected function formatErrors(Validator $validator)
    {
        return $validator->getMessageBag()->toArray();
    }
}
