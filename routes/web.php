<?php

use App\Http\Livewire\Pages\Admin\Dashboard;
use App\Http\Livewire\Pages\Home;
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

Route::get('/', Home::class)->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

require __DIR__ . '/auth.php';
