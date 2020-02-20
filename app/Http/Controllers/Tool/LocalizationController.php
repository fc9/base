<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Localize;
use Illuminate\Support\Facades\Lang;

class LocalizationController extends Controller
{
    /**
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($locale)
    {
        Localize::set($locale);

        return redirect()->back();
    }
}
