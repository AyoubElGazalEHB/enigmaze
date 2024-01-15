<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\Admincontroller;
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



Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminControlLer:: class,"user"]);

Route::get("/deletegame/{id}",[AdminControlLer:: class,"deletegame"]);

Route::get("/gamemode",[AdminControlLer:: class,"gamemode"]);

Route::post("/uploadgamemode",[AdminControlLer:: class,"upload"]);



Route::get("/deleteuser/{id}",[AdminControlLer::class, "deleteuser"]);

Route::get("/updateview/{id}",[AdminControlLer::class, "updateview"]);

Route::post("/update/{id}",[AdminControlLer::class, "update"]);

Route::get ("/redirects", [HomeControlLer::class,"redirects"]);

Route::post("/reservation",[AdminControlLer::class, "reservation"]);

Route::get("/viewreservation",[AdminControlLer::class, "viewreservation"]);

Route::get("/viewnarrators",[AdminControlLer::class, "viewnarrators"]);


Route::post("/uploadnarrators",[AdminControlLer::class, "uploadnarrators"]);

Route::get("/updatenarrators/{id}",[AdminControlLer::class, "updatenarrators"]);

Route::post("/updatnarrators/{id}",[AdminControlLer::class, "updatnarrators"]);

Route::get("/deletenarrators/{id}",[AdminControlLer::class, "deletenarrators"]);




Route::middleware(['auth:sanctum', 'verified']) ->get('/dashboard', function()
{
return view( 'dashboard');
})->name('dashboard');
