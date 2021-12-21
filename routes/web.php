<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/catalog/add', function () {
    return view('addcatalog');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', 'App\Http\Controllers\CatalogController@index')->name('catalog.index');
Route::get('show/{id}', [App\Http\Controllers\CatalogController::class, 'show'])->name('catalog.show');
Route::get('search/', [App\Http\Controllers\CatalogController::class, 'search'])->name('catalog.search');
Route::get('update/{id}', [App\Http\Controllers\CatalogController::class, 'update'])->name('catalog.update');
Route::get('/catalog/add', [App\Http\Controllers\CatalogController::class, 'data'])->name('catalog.data');
Route::post('/catalog/add/new', [App\Http\Controllers\CatalogController::class, 'add'])->name('catalog.add');
Route::get('/destroy/{id}', [App\Http\Controllers\CatalogController::class, 'destroy'])->name('catalog.destroy');
Route::get('/skill', [App\Http\Controllers\SkillController::class, 'index'])->name('skill.index');
Route::post('/skill/add', [App\Http\Controllers\SkillController::class, 'create'])->name('skill.add');
Route::get('/skill/update/{id}', [App\Http\Controllers\SkillController::class, 'update'])->name('skill.update');
Route::get('/skill/show/{id}', [App\Http\Controllers\SkillController::class, 'show'])->name('skill.show');
Route::get('/skill/destroy/{id}', [App\Http\Controllers\SkillController::class, 'destroy'])->name('skill.destroy');
// Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
