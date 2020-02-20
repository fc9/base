<?php

namespace Modules\Localization\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Localization\Http\Middleware\Localize;

class LocalizationController extends Controller
{
    /**
     * Update the locale.
     *
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($locale)
    {
        Localize::set($locale);
        return redirect()->back();
    }
}
