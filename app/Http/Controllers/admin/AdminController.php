<?php

namespace App\Http\Controllers\admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{


    /**
     * View to login user admin
     *
     * @return View
     */
    function toLogin(): View
    {
        return view("pages.login");
    }


    /**
     * Get request to logue user admin
     *
     * @param Request $request
     * @return RedirectResponse
     */
    function login(Request $request): RedirectResponse
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ],[
            "password.required"=>"Mot de passe obligatoire"
        ]);
      
        return redirect()->route("index.dasboard");
    }
}
