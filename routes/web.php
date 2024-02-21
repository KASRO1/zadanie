<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::view("/", "index")->name("main");
Route::get("/coin/getAssets", [UserController::class, "getAssets"])->name("api.coin.getAssets");

Route::middleware("guest")->group(function () {
    Route::view("/login", "auth.login")->name("login");
    Route::view("/register", "auth.register")->name("register");

    Route::post("/login", [UserController::class, "login"])->name("api.login");
    Route::post("/register", [UserController::class,"register"])->name("api.register");
});

Route::middleware("auth")->group(function () {
    Route::get("/logout", [UserController::class, "logout"])->name("api.logout");
});

Route::middleware("role:admin")->prefix("admin")->group(function () {
    Route::get("/users", [AdminController::class, "showUsers"])->name("admin.users");
    Route::post("/user/delete", [AdminController::class, "deleteUser"])->name("admin.users.delete");
    Route::get("/coins", [AdminController::class, "showCoins"])->name("admin.coins");
    Route::post("/coin/delete", [AdminController::class, "deleteCoin"])->name("admin.coin.delete");
    Route::post("/coin/create", [AdminController::class, "createCoin"])->name("admin.coin.create");

});
