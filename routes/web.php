<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/home', function () {
    return view('home', [
        "title" => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Halaman About",
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts Page",
        "desc" => "Membuat halaman Post lewat roter dengan mengirimkan data",
        "date" => date("Y-m-d H:i:s"),
    ]);
});
