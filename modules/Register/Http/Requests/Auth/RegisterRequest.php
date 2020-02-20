<?php

namespace Modules\Register\Http\Requests\Auth;

use Modules\Register\Http\Requests\AbstractFormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;
use App\Rules\Qualified;

class RegisterRequest extends AbstractFormRequest
{
    use SanitizesInput;

    /**App\
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
            'indicator' => 'trim|capitalize|escape|lowercase',
            'email' => 'trim|lowercase',
            'firstname' => 'trim|escape|lowercase|capitalize',
            'lastname' => 'trim|escape|lowercase|capitalize',
            'username' => 'trim|escape|lowercase',
            'password' => 'trim',
            'country' => 'trim|escape|uppercase',
            'phone' => 'trim',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $pattern = config('register.pattern.username');

        return [
            'indicator' => ['bail', 'required', 'min:5', 'max:18', 'regex:' . $pattern, new Qualified()],
            'email' => 'bail|required|max:90|email|unique:user',
            'firstname' => 'required|min:3|max:18|string',
            'lastname' => 'min:3|max:45|string',
            'username' => 'required|min:5|max:18|string|bail|regex:' . $pattern . '|unique:user',
            'password' => 'required|min:8|max:24|string',
            'country' => 'required|max:2',
            'phone' => 'required|min:7|max:15',
        ];
    }
}
