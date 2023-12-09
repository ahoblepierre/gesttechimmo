<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    function __construct()
    {
        Carbon::setLocale('fr');
        
    }
    use AuthorizesRequests, ValidatesRequests;
}
