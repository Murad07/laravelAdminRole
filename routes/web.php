<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Post route

Route::get('edit/{id}', [PostController::class, 'showData']);
Route::post('edit/{id}', [PostController::class, 'update']);

Route::get('edit-page/{id}', [PageController::class, 'showData']);
Route::post('edit-page/{id}', [PageController::class, 'update']);


// Excel Sheet upload part
Route::get('/import-form', [StudentController::class, 'importForm']);

Route::post('/import', [StudentController::class, 'import'])->name('student.import');
// Excel Sheet upload part

require __DIR__.'/auth.php';
