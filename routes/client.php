<?php

use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;

Route::get("/",[ClientController::class,'index'])->name("home");


Route::get("a-propos",[ClientController::class,"aPropos"])->name("apropos");



Route::get("nos-services",[ClientController::class,"nosService"])->name("nosservices");

Route::get("nos-formation",[ClientController::class,"nosFormations"])->name("nosformations");

Route::get("formation/{slug}/details/{id}",[ClientController::class,"detailFormation"])->name("detail.formations");


Route::get("blog",[ClientController::class,"blog"])->name("blog");

Route::get("blog/detail/{id}/{slug}",[ClientController::class,"blogDetail"])->name("blog.detail");

Route::post('add-commentaire',[ClientController::class,'addCommentaire'])->name('blog.commentaire');

Route::get('rechercher-un-article',[ClientController::class,'rechercheArticleBlog'])->name('blog.search');


################################################################################

Route::controller(ClientController::class)->group(function(){

    Route::get("nous-contacter","contact")->name("contact");

    Route::post("contact", 'store')->name("client.contact");
});




