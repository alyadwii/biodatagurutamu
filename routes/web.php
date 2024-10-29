<?php
use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/rutebaru', function () {
  return '<h1 style="color:red;">ini adalah rute baru tanpa MVC</h1>';
});

// ini adalah rute dengan view
Route::get('/ruteview', function () {
  return view('ruteview');
});

// ini adalah rute dengan view & controller 
route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

// ini adalah rute dengan view, controller & model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);


Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);