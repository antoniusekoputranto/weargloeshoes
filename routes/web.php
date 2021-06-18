<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\productcolourcontroller;
use Illuminate\Support\Facades\DB;

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
    return view('pages.home');
});



Route::get('/cart', [OrderController::class, 'getOrder']);
Route::get('/cart/delete/{id}', [OrderController::class, 'deleteOrder']);


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/admin-login', function () {
    return view('pages.admin_login');
});

Route::get('/login-register', function () {
    return view('loginregister');
});

Route::get('/detailproduct', function () {
    return view('detailproduct');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/new_arrival', function () {
    if (session('success')) {
        $products = DB::table('products')->where('new_arrival', 'Y')->get();
        return view('pages.new_arrival', ['products' => $products]);
    } else {
        return redirect('/login-register');
    }
});

Route::get('/shoes', function () {
    if (session('success')) {
        $products = DB::table('products')->get();
        return view('pages.shoes', ['products' => $products]);
    } else {
        return redirect('/login-register');
    }
});

Route::get('/custom', function () {
    if (session('success')) {
        return view('pages.custom');
    } else {
        return redirect('/login-register');
    }
});

Route::get('/admin', function () {
    if (session('admin')) {
        $products = DB::table('products')->get();
        return view('admin.products', ['products' => $products]);
    } else {
        return redirect('admin-login');
    }
});


Route::get('/admin/products', [ProductController::class, 'get']);

Route::get('/admin/users', function () {
    if (session('admin')) {
        $users = DB::table('users')->get();
        return view('admin.users', ['users' => $users]);
    } else {
        return redirect('admin-login');
    }
});

Route::get('/admin/products/add_product', function () {
    return view('admin.add_product');
});

Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']);

Route::post('/add_product', [ProductController::class, 'create']);
Route::post('/update_product', [ProductController::class, 'update']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/admin_login', [AuthController::class, 'adminLogin']);
Route::get('/admin/users/delete/{id}', [AuthController::class, 'delete']);


//Route::get('cart/{id}', [cartController::class, 'getOrder']);

Route::get('cart/{id}', [OrderController::class, 'insertOrder']);

Route::get('admin/products/detail/{id}', [productcolourcontroller::class, 'index']);
Route::get('admin/products/detail/{id}/add_colour', [productcolourcontroller::class, 'create']);
Route::post('admin/products/detail/{id}/add_colour/storecolour', [productcolourcontroller::class, 'store']);
Route::get('admin/products/detail/{id}/edit_colour/{idcolour}', [productcolourcontroller::class, 'edit']);
Route::post('admin/products/detail/{id}/edit_colour/{idcolour}/updatecolour', [productcolourcontroller::class, 'update']);
Route::get('admin/products/detail/{id}/delete_colour/{idcolour}', [productcolourcontroller::class, 'destroy']);
