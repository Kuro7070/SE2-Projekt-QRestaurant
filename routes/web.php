<?php

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\FileUpload;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('layouts.guest');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('layouts.app');
});



Route::group(['middleware' => ['auth']], function() {

    Route::get('users',[\App\Http\Controllers\UserController::class, 'index']);
    Route::get('users/{userid}',[\App\Http\Controllers\UserController::class, 'getUserById']);

});


Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
Route::any('/remove-file/{id}', [FileUpload::class, 'destroy'])->name('removePDF');

Route::post('/contact',[\App\Http\Controllers\ContactController::class, 'saveContact'])->name('kontakt');
Route::any('/update',[\App\Http\Controllers\UserController::class, 'updateData'])->name('update');
Route::any('/destroyPic',[\App\Http\Controllers\UserController::class, 'destroyProfilePic'])->name('destroyPic');

Route::get('/pdfs', function() {
    return view('pdf-files');
});

Route::get('/remove-file', function() {
    return view('delete-pdf');
});

Route::any('/delete', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('delete');
