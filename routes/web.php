<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesFunnelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () { return view('index'); });
//    Route::get('/home', function () { return view('index1'); });
    Route::get('/email', function () { return view('email'); });
    Route::get('/chat-box', function () { return view('chat-box'); });
    Route::get('/file-manager', function () { return view('file-manager'); });
    Route::get('/contact-list', function () { return view('contact-list'); });
    Route::get('/to-do', function () { return view('to-do'); });
    Route::get('/invoice', function () { return view('invoice'); });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    //user details
    Route::get('all-users', [UserController::class, 'index'])->name('users');
    Route::get('add-user', [UserController::class, 'create'])->name('users.add');
    Route::post('store-user', [UserController::class, 'store'])->name('users.post');
    Route::get('edit-user/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('update-user/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('delete-user/{id}', [UserController::class, 'delete'])->name('users.destroy');

    //company details
    Route::get('all-companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('add-company', [CompanyController::class, 'create'])->name('companies.add');
    Route::post('post-company', [CompanyController::class, 'store'])->name('companies.post');
    Route::get('edit-company/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::post('update-company/{id}', [CompanyController::class, 'update'])->name('companies.update');
    Route::get('delete-company/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');

    //sales details
    Route::get('all-funnels', [SalesFunnelController::class, 'index'])->name('funnels');
    Route::get('create-funnel', [SalesFunnelController::class, 'create'])->name('funnels.create');
    Route::post('store-funnel', [SalesFunnelController::class, 'store'])->name('funnels.store');
    Route::get('edit-funnel/{id}', [SalesFunnelController::class, 'edit'])->name('funnels.edit');
    Route::post('update-funnel/{id}', [SalesFunnelController::class, 'update'])->name('funnels.update');
    Route::get('delete-funnel/{id}', [SalesFunnelController::class, 'destroy'])->name('funnels.destroy');

    //products details
    Route::get('all-products', [ProductController::class, 'index'])->name('products');
    Route::get('add-product', [ProductController::class, 'create'])->name('products.create');
    Route::post('store-product', [ProductController::class, 'store'])->name('products.store');
    Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('update-product/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('delete-product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});
//Route::get('/login', function () { return view('login'); });

