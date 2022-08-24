<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change(Request $request)
    {
        $locale = $request->input('locale');
        Session::put('locale', $locale);
        Session::put('direction', $locale=='ar'?'rtl':'ltr');
        App::setLocale($locale);
        return redirect()->back();
    }
}
