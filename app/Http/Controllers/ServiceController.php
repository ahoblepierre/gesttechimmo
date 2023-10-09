<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{

    /**
     * liste des service
     *
     * @return View
     */
    function index(): View
    {
        return view("admin.service.index");
    }


    function create(): View
    {
        return view("admin.service.create");
    }
}
