<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatController;

use App\Http\Controllers\RepasController;

use App\Http\Controllers\RestaurationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;

Route::get("/signup", [RegisterController::class, "signup"])->name("signup");
Route::post("/signu", [RegisterController::class, "register"])->name("register");
Route::post("/signin", [LoginController::class, "signin"])->name("signin");

Route::group(['middleware' => ['session.timeout']], function () {
    Route::get('/user/consommation/{user}', [UserManagementController::class, 'consommation'])->name("consommation");
    Route::get("/", [LoginController::class, "index"])->name("index");
    Route::post("/logout", [LogoutController::class, "logout"])->name("logout");
    Route::get("/dashboard/{periode?}", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/roles", [RoleController::class, "index"])->name("roles");
    Route::get("/administration", [UserManagementController::class, "index"])->name("getUser");
    Route::post("/add-user", [UserManagementController::class, "create"])->name("add_user");
    Route::get("/administration/{id?}", [UserManagementController::class, "index"])->name("user.edite");
    Route::post("/update-user/{id}", [UserManagementController::class, "update"])->name("update.user");
    Route::post("/active-or-desactive/{id}", [UserManagementController::class, "edit"])->name("change_status.user");
    Route::get("/activite", [ActiviteController::class, "index"])->name("activite");
    Route::get("/detail-activite", [ActiviteController::class, "show"])->name("activite.detail");
    Route::post("/edit-user/{user}", [UserManagementController::class, "edite"])->name("edite.user");
    Route::post("/payer/{consommation}", [UserManagementController::class, "payer"])->name("consommation.payer");



    Route::prefix('restauration')->group(function(){
        Route::get("/", [RestaurationController::class, "index"])->name("listing.restauration");
        Route::get("/detail", [RestaurationController::class, "show"])->name("detail.restauration");
        #Route: : get('/show-form-stocke-restauration', [ArticleController::class, "update"])->name("d.stocke_restauration");
        #Route: : get('/update-stocke-restauration', [ArticleController::class, "update"])->name("update.stocke_restauration");
    });

    Route::prefix('stocke')->group(function(){
        Route::get('/restauration', [ArticleController::class, "index"])->name("index.stocke_restauration");
        Route::post('/save-restaurant-stocke', [ArticleController::class, "store"])->name("store.stocke_restauration");
        Route::get('/listing-restaurant-stocke', [ArticleController::class, "fetch_all"])->name("fetchAll.stocke_restauration");
        Route::get('/{id}/restauration', [ArticleController::class, "show"])->name("show.stocke_restauration");
        Route::get('/edite-stocke-restauration', [ArticleController::class, "edite"])->name("edite.stocke_restauration");
        Route::get('/{article}/article', [ArticleController::class, "detail"])->name("detail.articles");
        Route::get("/edite", [RestaurationController::class, "update"])->name("update.restauration");
        Route::post("/edite", [RestaurationController::class, "update"]);
        Route::post('/{article}/update', [ArticleController::class, "update"])->name("update.stocke_restauration");
        Route::post('/{article}/modifier', [ArticleController::class, "modifier"])->name("modifier.article");
        #Route: :get('/show-stocke-restauration/{id}', [ArticleController::class, "show"])->name("show.stocke_restauration");
        Route::post('/changeStatus-stocke-restauration/{id}', [ArticleController::class, "changeStatus"])->name("changeStatus.stocke_restauration");
        Route::get('/inaactif-stocke-restauration', [ArticleController::class, "fetchStockesDesactives"])->name("fetchStockesDesactives.stocke_restauration");
        Route::get('/desabled-stocke-restauration', [ArticleController::class, "fetchStockesManquants"])->name("fetchStockesManquants.stocke_restauration");
    });

    Route::prefix('tables')->group(function(){
        Route::get("/", [TableController::class, "index"])->name("table");
        Route::post("/table", [TableController::class, "store"])->name('store.table');
        Route::get('/{id}/detail', [TableController::class, 'show'])->name('show.table');
        Route::post('/{id}/update', [TableController::class, 'update'])->name('update.table');

        Route::post('/{table}/edite', [TableController::class, 'edit'])->name('edite.table');
    });

    Route::prefix('repas')->group(function(){
        Route::get("/", [PlatController::class, "index"])->name("index.repas");
        Route::post('/menu', [PlatController::class, 'save'])->name('save.repas');
        Route::post('/update/{id}', [PlatController::class, 'update'])->name('update.repas');
    });

    Route::prefix('menus')->group(function(){
        Route::post("/", [MenuController::class, 'create'])->name('create.menu');
        Route::get('/print-pdf/{menu}', [MenuController::class, 'generatePDF'])->name('generatePDF.menu');
    });

    Route::prefix('banniere')->group(function(){
        Route::get("/", [BanniereController::class, 'index'])->name('index.banniere');
        Route::post("/create", [BanniereController::class, "saveOrUpdate"])->name('create.banniere');
    });

    Route::prefix('plats')->group(function(){
        Route::get("/", [PlatController::class, 'mesplats'])->name('index.plats');
        Route::post("/create/{menu}/{repas}", [PlatController::class, "create"])->name('create.plats');
        Route::get("/listing/{menu}/{repas}", [PlatController::class, "listing"])->name('listing.plats');
    });


    Route::prefix('caisses')->group(function(){
        Route::get("/{repas?}", [VenteController::class, 'index'])->name('index.caisses');
        Route::post("/create", [VenteController::class, 'create'])->name('create.caisses');
        Route::get('/print-recu/{vente}', [VenteController::class, 'print_recu'])->name('print_recu.vente');
    });

    Route::prefix('dispatch')->group(function(){
        Route::get("/recette/{espace?}/{repas?}", [DispatcherController::class, "getRecettes"])->name("dispatcher.getRecettes");
        Route::get("{departement?}/{stocke?}", [DispatcherController::class, "index"])->name("dispatcher.index");
        Route::post("/store", [DispatcherController::class, "store"])->name("dispatcher.store");
        Route::post('/save-recette', [DispatcherController::class, 'saveRecette'])->name("dispatcher.saveRecette");
    });

    Route::prefix('vente')->group(function(){
        Route::get("/", [VenteController::class, "showAll"])->name("vente.showAll");
    });
});
