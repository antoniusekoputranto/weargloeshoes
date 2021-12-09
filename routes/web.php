<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\productcolourcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SizecartinfoController;
use App\Http\Controllers\SizecartController;
use App\Http\Controllers\CustomerserviceController;
use App\Http\Controllers\detailproduct;
use App\Http\Controllers\CustomnoteController;
use App\Http\Controllers\CustomtestimonyController;
use App\Http\Controllers\custom;
use App\Http\Controllers\ImageproductController;
use App\Http\Controllers\imageproductnew;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\articlenew;
use App\Http\Controllers\detailarticle;
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

Route::get('/', [ homecontroller::class, 'index']);

// function () {
//     return view('pages.home');
// });



Route::get('/cart',[ OrderController::class, 'getOrder']);
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

// Route::get('/detailproduct/{id}', function ($id) {
//     $product = DB::table('products')->find($id);
//     dd($products);
//     return view('detailproduct',compact("product"));
// });
Route::get('/detailproduct/{id}', [detailproduct::class, 'index']);
// Route::get('/custom/{id}', [custom::class, 'index']);
Route::get('/custom', [custom::class, 'index']);





Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/new_arrival', function () {
    // if (session('success')) {
        $products = DB::table('products')->orderBy('created_at','desc')->where('active',1)->take(12)->get();
        // dd($products);
        return view('pages.new_arrival', ['products' => $products]);
    // } else {
    //     return redirect('/login-register');
    // }
});

Route::get('/shoes/{ktgr?}', function ($ktgr=null) {
    // if (session('success')) {
        $products = $ktgr?DB::table('products')->where('product_type',$ktgr)->where('active',1)->paginate(12):DB::table('products')->where('active',1)->paginate(12);
        return view('pages.shoes', ['products' => $products]);
    // } else {
    //     return redirect('/login-register');
    // }
});

// Route::get('/custom', function () {
//     if (session('success')) {
//         return view('pages.custom');
//     } else {
//         return redirect('/login-register');
//     }
// });

Route::get('/admin', function () {
    if (session('admin')) {
        return view ('admin');
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


Route::get('/admin/products/add_product', [ProductController::class, 'add']);
Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']);
Route::get('/admin/products/discount/{id}', [ProductController::class, 'discount']);

Route::post('/add_product', [ProductController::class, 'create']);
Route::post('/update_product', [ProductController::class, 'update']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/admin_login', [AuthController::class, 'adminLogin']);
Route::get('/admin/users/delete/{id}', [AuthController::class, 'delete']);

Route::get('/aboutus', [HomeController::class, 'aboutus']);


// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

//Route::get('cart/{id}', [cartController::class, 'getOrder']);

Route::get('/cart/{id}', [OrderController::class, 'insertOrder']);

// Route::get('admin/products/detail/{id}', [productcolourcontroller::class, 'index']);
// Route::get('admin/products/detail/{id}/add_colour', [productcolourcontroller::class, 'create']);
// Route::post('admin/products/detail/{id}/add_colour/storecolour', [productcolourcontroller::class, 'store']);
// Route::get('admin/products/detail/{id}/edit_colour/{idcolour}', [productcolourcontroller::class, 'edit']);
// Route::post('admin/products/detail/{id}/edit_colour/{idcolour}/updatecolour', [productcolourcontroller::class, 'update']);
// Route::get('admin/products/detail/{id}/delete_colour/{idcolour}', [productcolourcontroller::class, 'destroy']);




// Route::get('/feed', function () {
//     return view('feed');
// });




Route::get('/admin/create_feed', [FeedController::class, 'create']);
Route::post('/admin/create_feed', [FeedController::class, 'store']);
Route::get('/admin/show_feed', [FeedController::class, 'index']);
Route::get('/admin/delete_feed/{idfeed}', [FeedController::class, 'destroy']);
Route::get('/admin/update_feed/{idfeed}', [FeedController::class, 'edit']);
Route::post('/admin/update_feed/{idfeed}', [FeedController::class, 'update']);




Route::get('/admin/create_event', [EventController::class, 'create']);
Route::post('/admin/create_event', [EventController::class, 'store']);
Route::get('/admin/show_event', [EventController::class, 'index']);
Route::get('/admin/delete_event/{idevent}', [EventController::class, 'destroy']);
Route::get('/admin/update_event/{idevent}', [EventController::class, 'edit']);
Route::post('/admin/update_event/{idevent}', [EventController::class, 'update']);

Route::post('/admin/create_account', [AccountController::class, 'store']);
Route::post('/admin/update_account/{idaccount}', [AccountController::class, 'update']);
Route::get('/admin/account', [AccountController::class, 'index']);


Route::resource('/admin/post', PostController::class);

Route::post('/admin/create_sizecartinfo', [SizecartinfoController::class, 'store']);
Route::post('/admin/update_sizecartinfo/{idsizecartinfo}', [SizecartinfoController::class, 'update']);

Route::get('/admin/sizecartinfo', [SizecartinfoController::class, 'index']);

Route::get('/admin/sizecartinfo/create_sizecart', [SizecartController::class, 'create']);
Route::post('/admin/sizecartinfo/create_sizecart', [SizecartController::class, 'store']);
Route::get('/admin/sizecartinfo/delete_sizecart/{idsizecart}', [SizecartController::class, 'destroy']);
Route::get('/admin/sizecartinfo/update_sizecart/{idsizecart}', [SizecartController::class, 'edit']);
Route::post('/admin/sizecartinfo/update_sizecart/{idsizecart}', [SizecartController::class, 'update']);

Route::get('/admin/create_customerservice', [CustomerserviceController::class, 'create']);
Route::post('/admin/create_customerservice', [CustomerserviceController::class, 'store']);
Route::get('/admin/show_customerservice', [CustomerserviceController::class, 'index']);
Route::get('/admin/delete_customerservice/{idcustomerservice}', [CustomerserviceController::class, 'destroy']);
Route::get('/admin/update_customerservice/{idcustomerservice}', [CustomerserviceController::class, 'edit']);
Route::post('/admin/update_customerservice/{idcustomerservice}', [CustomerserviceController::class, 'update']);

Route::get('/admin/customnote/create_customnote', [CustomnoteController::class, 'create']);
Route::post('/admin/customnote/create_customnote', [CustomnoteController::class, 'store']);
Route::get('/admin/customnote/show_customnote', [CustomnoteController::class, 'index']);
Route::get('/admin/customnote/delete_customnote/{idcustomnote}', [CustomnoteController::class, 'destroy']);
Route::get('/admin/customnote/update_customnote/{idcustomnote}', [CustomnoteController::class, 'edit']);
Route::post('/admin/customnote/update_customnote/{idcustomnote}', [CustomnoteController::class, 'update']);

Route::get('/admin/customtestimony/create_customtestimony', [CustomtestimonyController::class, 'create']);
Route::post('/admin/customtestimony/create_customtestimony', [CustomtestimonyController::class, 'store']);
Route::get('/admin/customtestimony/delete_customtestimony/{idcustomtestimony}', [CustomtestimonyController::class, 'destroy']);
Route::get('/admin/customtestimony/update_customtestimony/{idcustomtestimony}', [CustomtestimonyController::class, 'edit']);
Route::post('/admin/customtestimony/update_customtestimony/{idcustomtestimony}', [CustomtestimonyController::class, 'update']);

// Route::get('/admin/create_imageproduct', [ImageproductController::class, 'create']);
// Route::post('/admin/create_imageproduct', [ImageproductController::class, 'store']);
// Route::get('/admin/show_imageproduct', [ImageproductController::class, 'index']);
// Route::get('/admin/delete_imageproduct/{idimageproduct}/{imagenumber}', [ImageproductController::class, 'destroy']);
// Route::get('/admin/update_imageproduct/{idimageproduct}', [ImageproductController::class, 'edit']);
// Route::post('/admin/update_imageproduct/{idimageproduct}', [ImageproductController::class, 'update']);

Route::get('/admin/show_imageproduct/{id}', [imageproductnew::class, 'index']);

Route::get('/admin/create_article', [ArticleController::class, 'create']);
Route::post('/admin/create_article', [ArticleController::class, 'store']);
Route::get('/admin/show_article', [ArticleController::class, 'index']);
Route::get('/admin/delete_article/{idarticle}', [ArticleController::class, 'destroy']);
Route::get('/admin/update_article/{idarticle}', [ArticleController::class, 'edit']);
Route::post('/admin/update_article/{idarticle}', [ArticleController::class, 'update']);

Route::get('/pages/article/article', [articlenew::class, 'index']);
Route::get('/pages/article/detailarticle/{id}', [detailarticle::class, 'index']);


// Route::get('/pages/article/article', function () {
//     $articles = DB::table('products')->orderBy('created_at','desc')->take(12)->get();
//     return view('pages.new_arrival', ['products' => $products]);
// });


// Route::get('/pages/article/article', function () {
//     return view('pages.article.article');
// });

// Route::get('/pages/article/detailarticle/{id}', [detailproduct::class, 'index']);


// Route::get('/pages/article/detailarticle', function () {
//     return view('pages.article.detailarticle');
// });