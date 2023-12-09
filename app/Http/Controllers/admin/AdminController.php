<?php

namespace App\Http\Controllers\admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

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

        // User::create(array(
        //     "email"=>"admin@gestimmo.com",
        //     "password"=>"12345678",
        //     "name"=>"Admin Pierre"
        // ));

        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ], [
            "password.required" => "Mot de passe obligatoire",
            "email" => "Email invalide",
            "email.required" => "Email obligatoire"
        ]);

        $input = $request->only(["email", "password"]);

        if (Auth::attempt($input)) {
            return redirect()->route("index.dasboard");
        } else {
            return redirect()->back()->withErrors(
                [
                    "email" => "Email ou Mot de passe incorrecte",
                    "password"=>"Mot de passe incorrecte"
                ]
            )->withInput();
        }
    }


    function toLogout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
