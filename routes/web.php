<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\BikeController;

use App\Models\User; 

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/ajustes-de-perfil/{user}', function (User $user) {
        return view('users.settings', compact('user'));
    })->name('users.settings');

    Route::get('/bicicletas/disponibles', [BikeController::class, 'available'])->name('bikes.available');
    Route::get('/bicicletas/ocupadas', [BikeController::class, 'busy'])->name('bikes.busy');
    Route::resource('bicicletas', BikeController::class)->parameters(['bicicletas' => 'bike'])->except('show')->names('bikes');

});
