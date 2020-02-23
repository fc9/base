<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Register\Entities\UserView;

class Qualified implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return UserView::where('username', $value)
            ->where('user_status', config('register.user.status.active'))
            ->where('membership_status', config('register.membership.status.active'))
            ->where('graduate', '!=', config('register.membership.graduate.partner'))
            ->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute not found or unqualified.';
    }
}
