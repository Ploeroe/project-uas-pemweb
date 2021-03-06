<?php

use App\Models\Facility;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFacility;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SewaController;

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

$appName = "Laravel 8";

Route::view('/', 'welcome', ['appName' => $appName]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('gameover', function () {
    return view('gameover');
});

// USER
Route::group(['middleware' => 'user'], function () {

    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/userlisting', [UserFacility::class, 'index']);
    Route::get('/userdetail/{facility:nameFasilitas}', [UserFacility::class, 'show']);
    Route::get('/booking', [SewaController::class, 'index']);
    Route::get('/booking/add/{facility:id}', [SewaController::class, 'show']);
    Route::post('/booking/request', [SewaController::class, 'create']);
    Route::get('/request/{user_id}', [SewaController::class, 'request']);
    
});


// MANAGEMENT
Route::group(['middleware' => 'management'], function () {

    Route::get('/management/dashboard', [FacilityController::class, 'dashboard']);
    Route::get('/facility', [FacilityController::class, 'index']);
    Route::get('/facility/add', [FacilityController::class, 'create']);
    Route::post('/facility/store', [FacilityController::class, 'store']);
    Route::get('/facility/edit/{id}', [FacilityController::class, 'edit']);
    Route::post('/facility/update', [FacilityController::class, 'update']);
    Route::get('/facility/delete/{id}', [FacilityController::class, 'delete']);

    Route::get('/request', [FacilityController::class, 'requestlist']);
    Route::post('/request/store', [FacilityController::class, 'requeststore']);
    
});

// ADMIN
Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/dashboard', [AdminController::class,  'dashboard']);
    Route::get('admin/userlist', [AdminController::class,  'userlist']);
    Route::get('admin/userlist/delete/{id}', [AdminController::class, 'userD']);

    Route::get('admin/facility', [AdminController::class,  'index']);
    Route::get('admin/facility/add', [AdminController::class,  'create']);
    Route::post('admin/facility/store', [AdminController::class, 'store']);
    Route::get('admin/facility/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/facility/update', [AdminController::class, 'update']);
    Route::get('admin/facility/delete/{id}', [AdminController::class, 'delete']);

    Route::get('admin/userlist/edit/{id}', [AdminController::class, 'userEshow']);
    Route::post('admin/userlist/store', [AdminController::class, 'userEstore']);
    Route::get('admin/requestlist', [AdminController::class,  'requestlist']);
    Route::get('admin/request/delete/{id}', [AdminController::class, 'deletereq']);
    
    // Route::get('admin/facilitylist', [AdminController::class,  'facilitylist']);
});

// Route::get('adminhome', function () {
//     return view('admin/adminhome', [
//         "title" => "Home - Admin"
//     ]);
// });

// LOGIN REGISTER
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('/profile', [UserController::class, 'updateprofile'])->middleware('auth');
