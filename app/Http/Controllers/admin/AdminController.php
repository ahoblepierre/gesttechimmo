<?php

namespace App\Http\Controllers\admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{


    /**
     * View to login user admin
     *
     * @return View
     */
    function toLogin() : View {
        return view("pages.login");
    }


    /**
     * Get request to logue user admin
     *
     * @param Request $request
     * @return View
     */
    function login(Request $request) : View {
        var_export($request);
        return view("admin.pages.dashboard");
    }
}
