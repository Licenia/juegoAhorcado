<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PalabraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelacionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    
});

Route::middleware('auth')->group(function () {
    Route::resource('juego', JuegoController::class)->names([
        'index' => 'juego.index',
        'create' => 'juego.create',
        'store' => 'juego.store',
        'show' => 'juego.show',
        'edit' => 'juego.edit',
        'update' => 'juego.update',
        'destroy' => 'juego.destroy',
    ]);
    
    Route::post('juego/adivinar', [JuegoController::class, 'adivinar'])->name('juego.adivinar');
});

Route::resource('usuario', UsuarioController::class)->names([
    'create' => 'usuario.create',
]);

Route::get('categoria/create',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('categoria/store',[CategoriaController::class,'store'])->name('categoria.store');

Route::get('palabra/create',[PalabraController::class,'create'])->name('palabra.create');
Route::post('palabra/store',[PalabraController::class,'store'])->name('palabra.store');

Route::get('/','App\Http\Controllers\RelacionController@index'); 

require __DIR__.'/auth.php';
