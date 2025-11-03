<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Services\TestService;


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

Route::get('/test', function () {
    return view('test_frontend');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/testing', [TestController::class, 'showMessage']);

Route::get('/testing1', function (TestService $servicesss) {
    return response()->json(
        $servicesss->getMessage(),
        201
    );
});

Route::get('/items', function () {
    return response()->json([
        'message' => '1',
        200
    ]);
});

