<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return ['Laravel' => app()->version()];
});

Route::get('/blogs', [BlogController::class, 'index'])->name("blogs.index");
Route::get('/blogs/create', [BlogController::class, 'create']);
Route::post('/blogs/store', [BlogController::class, 'store'])->name("blogs.store");


Route::resource('comments', 'CommentController');
require __DIR__.'/auth.php';

