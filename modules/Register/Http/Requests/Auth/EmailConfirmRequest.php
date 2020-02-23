<?php

namespace Modules\Register\Http\Requests\Auth;

use Modules\Register\Http\Requests\AbstractFormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class EmailConfirmRequest extends AbstractFormRequest
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
            'token' => 'trim|escape|uppercase',
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
            'token' => 'bail|size:5|string|exists:email_confirm',
        ];
    }
}
