<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContatosController;
use Illuminate\Support\Facades\Route;


//Rota de contato - Read
Route::get('/contatos', [ContatosController::class, 'index']) ->name('contatos.index');

//Rota Delete
Route::delete('/contatos/{contatoId}', [ContatosController::class, 'delete'])->name('contatos.delete');

//Rota de Create - método get
Route::get('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.get');

//Rota de Create - método post
Route::post('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.post');

//Rota de Update - método get
Route::get('/contatos/update/{contatoID}', [ContatosController::class, 'update'])->name('contatos.update.get');

//Rota de Update - método put
Route::put('/contatos/update/{contatoID}', [ContatosController::class, 'update'])->name('contatos.update.put');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function() {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
