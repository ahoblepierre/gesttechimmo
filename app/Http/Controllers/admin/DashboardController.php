<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    
    function index() : View {
        return view("admin.pages.dashboard");
    }
}
