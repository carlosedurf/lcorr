<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Addresses\{
    AddressList,
    AddressCreate,
    AddressEdit,
    AddressView
};
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Users\{
    UserList,
    UserCreate,
    UserEdit,
    UserView
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('dashboard', Dashboard::class)->name('dashboard');


    /* Rotas de usuário */
    Route::prefix('users')->name('users.')->group(function(){

        Route::get('/', UserList::class)->name('index');
        Route::get('/create', UserCreate::class)->name('create');
        Route::get('/{user}/edit', UserEdit::class)->name('edit');
        Route::get('/{user}', UserView::class)->name('show');

    });

    Route::prefix('addresses')->name('addresses.')->group(function (){

        Route::get('/', AddressList::class)->name('index');
        Route::get('/create', AddressCreate::class)->name('create');
        Route::get('/{address}/edit', AddressEdit::class)->name('edit');
        Route::get('/{address}', AddressView::class)->name('show');

    });

});

