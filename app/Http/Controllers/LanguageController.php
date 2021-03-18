<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $locale)
    {
//        $request->session()->put('locale',$locale);
        session(['locale'=>$locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
