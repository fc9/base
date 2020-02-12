<?php

namespace Modules\Register\Http\Requests\Auth;

use Modules\Register\Http\Requests\AbstractFormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class LoginRequest extends AbstractFormRequest
{
    use SanitizesInput;

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
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'username' => 'trim|escape|lowercase',
            'password' => 'trim',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'bail|required|min:6|max:18|string|exists:user',
            'password' => 'bail|required|min:8|max:24|string',
        ];
    }
}
