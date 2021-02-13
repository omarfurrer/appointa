<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::group(['middleware' => ['auth','role:super-admin|admin']], function () {
    Route::redirect('/', '/admin/dashboard');
    Route::view('/dashboard', 'admin.dashboard');
    Route::get('/categories', [CategoryController::class, 'index']);
});

// Route::middleware(['web'])->group(function () {
//     //
// });