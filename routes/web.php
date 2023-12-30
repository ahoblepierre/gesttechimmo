<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\ArtcileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\admin\TemoignageController;

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




//View to login
Route::get('login', [AdminController::class,'toLogin'])->name("login");
//view to logue user 
Route::post("toLogin",[AdminController::class,'login'])->name("to.login");


Route::get("logout",[AdminController::class,'toLogout'])->name("to.logout");



Route::get('/dashboard', [DashboardController::class,"index"])->name("index.dasboard");

Route::get('index',function(){
    return view("index");
});


Route::prefix('adminitration')->group(function(){

    ##################### Service ########################
    Route::controller(ServiceController::class)->group(function(){
        //Liste des services
        Route::get("liste-service","index")->name("index.service");
        
        //Creer une nouveau service
        Route::post("ajouter-un-nouveau-service","store")->name("store.service");
        
        //Rechercher un service 
        Route::get("search-service", "search")->name("search.service");
        
        //modifier le staut d'un service
        Route::get("change-statut-service/{id}","changeStatut")->name("changeStaut.service");
        
        //Modifie un service 
        Route::get('show-service/{id}',"show")->name("show.service");
        
        //Update service
        Route::post("update-service","update")->name("update.service");
        
        //Supprimer un service 
        Route::get("destroy-service/{id}","destroy")->name("destroy.service");
        
        //Ajouter un service 
        Route::get("ajouter-un-service","create")->name("create.service");
    
    });
    
    
    ##################### Formation ########################
    
    Route::controller(FormationController::class)->group( function(){
    
        Route::get("liste-des-formations",'index')->name("index.formation");
        
        Route::get("ajouter-une-formation",'create')->name("create.formation");
        
        //Ajouter une formation
        Route::post("ajouter-un-nouveau-formation",'store')->name('store.formation');
        
        //Search  formation
        Route::get("search-formation",'search')->name("search.formation");
        
        //changer statut d'une formation
        Route::get("changer-statut-formation/{id}",'changerStatut')->name('changer.formation');
        
        //Editer un formation
        Route::get("show-formation/{id}",'show')->name("show.formation");
        
        //update formation
        Route::post("update-formation/{id}",'update')->name("update.formation");
        
        
        Route::get("destroy-formation/{id}",'destroy')->name("destroy.formation");
    
    });    
    
    ##################### Artciles ########################
    
    Route::controller(ArtcileController::class)->group(function(){
        
        Route::get("liste-des-articles",'index')->name("index.article");
        
        Route::get("ajouter-un-article",'create')->name("create.article");
        
        //Ajouter une formation
        Route::post("ajouter-un-nouveau-article",'store')->name('store.article');
        
        //Search  formation
        Route::get("search-article",'search')->name("search.article");
        
        //changer statut d'une formation
        Route::get("changer-statut-article/{id}",'changerStatut')->name('changer.article');
        
        //Editer un formation
        Route::get("show-article/{id}",'show')->name("show.article");
        
        //update formation
        Route::post("update-article/{id}",'update')->name("update.article");
        
        
        Route::get("destroy-article/{id}",'destroy')->name("destroy.article");
        
    
    });    
    
    ##################### Category ########################
    
    Route::controller(CategoryController::class)->group(function(){
    
        
        Route::get("liste-des-categories",'index')->name("index.category");
        
        Route::get("ajouter-un-category",'create')->name("create.category");
        
        //Ajouter une formation
        Route::post("ajouter-un-nouveau-category",'store')->name('store.category');
        
        //Search  formation
        Route::get("search-category",'search')->name("search.category");
        
        //changer statut d'une formation
        Route::get("changer-statut-category/{id}",'changerStatut')->name('changer.category');
        
        //Editer un formation
        Route::get("show-category/{id}",'show')->name("show.category");
        
        //update formation
        Route::post("update-category/{id}",'update')->name("update.category");
        
        
        Route::get("destroy-category/{id}",'destroy')->name("destroy.category");
    
    });    



    Route::controller(TemoignageController::class)->group(function(){

        Route::get('liste-temoignages', 'indexAction')->name('index.temoignage');

        Route::get('ajouter-un-temoignage', 'createAction')->name('create.temoignage');

        Route::post('store-temoignage','storeAction')->name('store.temoignage');

        Route::get('edit-temoignage/{id}','editAction')->name('edit.temoignage');

        Route::post('update-temoignage/{id}','updateAction')->name('update.temoignage');

        Route::get('change-temoignage/{id}','changeStatutAction')->name('change.temoignage');
    });

});


