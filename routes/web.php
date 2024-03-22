<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Area;
use App\Http\Controllers\District;
use App\Http\Controllers\CustomerCategoryController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\CallDetailsController;
use App\Http\Controllers\CustomerId;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/register',[Authentication::class,'register'])->name('register');
Route::post('/register',[Authentication::class,'registerUser'])->name('registerUser');
Route::get('/login',[Authentication::class,'login'])->name('login');
Route::post('/login',[Authentication::class,'authenticate'] )->name('authenticate');
Route::get('/logout',[Authentication::class,'logout'] )->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('dashboard',[Authentication::class,'dashboard'])->name('dashboard');
    Route::get('/',function () {
        return view('dashboard');
    });

    Route::resource('customer',Customer::class);
    Route::resource('area',Area::class);
    Route::resource('district',District::class);
    Route::resource('custCate',CustomerCategoryController::class);
    Route::resource('custType',CustomerTypeController::class);
    Route::resource('callDetails',CallDetailsController::class);

    Route::get('CustomerEdit', [Customer::class, 'customeredit']);
    Route::get('/customerId/{id}', [CustomerId::class, 'index']) ->name('customerId.id');
    
    Route::get('/allCall', [CustomerId::class, 'show']) -> name('allCall.show');
    Route::get('invoice/{id}',[customer::class,'invoice'])->name('invoice/{id}');
});


