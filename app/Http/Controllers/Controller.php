<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Redirect to locales page if site includes this locale
     * Else Redirect to default locale page if locale doesnt exist
     * 
     * @return Redirect
     */
    public function index(Request $request)
    {
        $allLocales = ['en', 'ru'];
        
        if(!in_array($request->locale, $allLocales)) {
            return redirect('/en');
        } else {
            return view('welcome');
        }
    }
}
