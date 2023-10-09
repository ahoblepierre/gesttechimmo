<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\ArtcileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class,"index"])->name("index.dasboard");

Route::get('index',function(){
    return view("index");
});



//View to login
Route::get('login', [AdminController::class,'toLogin'])->name("login");
//view to logue user 
Route::post("toLogin",[AdminController::class,'login'])->name("to.login");


##################### Service ########################
//Liste des services
Route::get("liste-service",[ServiceController::class,"index"])->name("index.service");
//Ajouter un service 
Route::get("ajouter-un-service",[ServiceController::class,"create"])->name("create.service");


##################### Formation ########################
Route::get("liste-des-formations",[FormationController::class,'index'])->name("index.formation");

Route::get("ajouter-une-formation",[FormationController::class,'create'])->name("create.formation");


##################### Artciles ########################
Route::get("liste-des-articles",[ArtcileController::class,'index'])->name("index.article");

Route::get("ajouter-un-article",[ArtcileController::class,'create'])->name("create.article");


