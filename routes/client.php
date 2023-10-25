<?php

use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get("/",[ClientController::class,'index'])->name("home");


Route::get("a-propos",[ClientController::class,"aPropos"])->name("apropos");



Route::get("nos-services",[ClientController::class,"nosService"])->name("nosservices");

Route::get("nos-formation",[ClientController::class,"nosFormations"])->name("nosformations");




Route::get("blog",[ClientController::class,"blog"])->name("blog");

Route::get("blog/detail",[ClientController::class,"blogDetail"])->name("blog.detail");


################################################################################

Route::controller(ClientController::class)->group(function(){

    Route::get("nous-contacter","contact")->name("contact");

    Route::post("contact", 'store')->name("client.contact");
});




