<?php

//use Illuminate\Http\Request;

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|   Route::get       | Consultar
|   Route::post      | Guardar
|   Route::delete    | Eliminar
|   Route::put       | Actualizar

*/

/* Route::get('/', function () {
   return 'RUTA HOME';
  
});

Route::get('blog', function () {
   return 'LISTADO DE PUBLICACIONES EN MI BLOG';
  
});

Route::get('blog/{slug}', function ($slug) {
   return $slug;
  
});


Route::get('buscar', function (Request $request) {
   return $request ->all();
  

*/
//Route::get('/', [PageController::class, 'home'])->name('home');

//Route::get('blog', [PageController::class, 'blog'])->name('blog');

//Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

Route::controller(PageController::class)->group ( function (){ 
   Route::get('/','home')->name('home');
   Route::get('blog','blog')->name('blog');
   Route::get('blog/{slug}','post')->name('post');
}) ;