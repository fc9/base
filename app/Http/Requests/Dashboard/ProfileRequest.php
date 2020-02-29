<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\AbstractFormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class ProfileRequest extends AbstractFormRequest
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
            //'image' => 'trim',
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
            'image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
