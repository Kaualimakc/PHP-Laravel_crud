<?php

use App\Http\Controllers\jogosController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Builder\FallbackBuilder;

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

//Route::get('/home', function () {
 //   return view('welcome');
//});
// Route::view('jogos' , 'jogos');

// Route::get('/jogos' , function () {
//     return 'Testanto Routes';
// });

// Route::view('/jogos' , 'jogos' , ['nome' => 'GTA']);

Route::prefix('jogos')->group(function(){
    Route::get('/',[jogosController::class,'index'])->name('jogos-index');
    Route::get('/create',[jogosController::class,'create'])->name('jogos-create');
    Route::post('/',[jogosController::class,'store'])->name('jogos-store');
    Route::get('/{id}/edit',[jogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}',[jogosController::class,'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}',[jogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

Route::fallback(function(){
    return 'Rota não encontrada!';
});