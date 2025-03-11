<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// rotta che usa il controller PageController e la sua funzione index()
Route::get("/", [PageController::class, "index"]);
