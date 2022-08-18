<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\AuthController;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

# ================Frontend================== #

Route::group(['middleware' => 'lang'], function () {
    Route::get('/change-language/{language}', 'LanguageController@change');

    Route::get('/', 'HomeController@index')->name('homePage');

    Route::get('/products', 'ProductController@index');
    Route::get('/products/{id}', 'ProductController@categoryFilter');
    Route::get('/products/detail/{id}', 'ProductController@detail')->name('productDetailCl');

    Route::group(['middleware' => 'auth.user'], function () {
        
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'CartController@index');
            Route::get('/addcart/{id}', 'CartController@AddCart');
            Route::get('/updateCart/{id}/{type?}', 'CartController@updateCart');
            Route::get('/deleteCart/{id}', 'CartController@deleteCart');
            Route::get('/checkout', 'CartController@checkOut');
            Route::post('/order', 'OrderController@mailling');
        });

        Route::get('user/profile', 'HomeController@profile')->name('profile');
        Route::post('user/profile', 'HomeController@editProfile');
        Route::post('user/password', 'HomeController@changePassword')->name('changePassword');
        Route::get('user/order', 'HomeController@order');

    });
    Route::get('/telegram-message', 'TelegramController@updateActivity');
    Route::get('/posts/{id}', 'HomeController@showPostDetail')->name('showPostDetail');

    Route::get('/login', function () {
        return view('frontend/LoginForm', ['title' => 'login']);
    })->name('user.login');
    Route::post('/login', 'AuthController@authenticate');
    Route::get('/register', function () {
        return view('frontend/RegisterForm', ['title' => 'register']);
    });
    Route::post('/register', 'AuthController@register');
    Route::get('/logout', 'AuthController@logout');
    Route::get('/get-password', 'AuthController@getpass');
    Route::get('/verify', 'AuthController@verified');
    Route::get('/forgot-password', 'AuthController@forgotPassword')->name('forgotPassword');
    Route::post('/forgot-password', 'AuthController@sendLink');
    Route::get('/set-default-password', 'AuthController@setDefaultPassword');
    Route::get('/search','HomeController@search')->name('search');

});

# ===============Backend=================== #

Route::get('/admin/login', function () {
    return view('backend/Login', ['title' => 'login']);
})->name('login');
Route::post('/admin/login', 'Admin\AdminController@authenticate');
Route::get('/admin/logout', 'Admin\AdminController@logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard', ['title' => 'welcome']);
    })->name('dashboard');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::resources([
            'account' => Admin\AdminController::class,
            'image' => Admin\ImageController::class,
            'user' => Admin\UserController::class,
            'category' => Admin\CategoryController::class,
            'product' => Admin\ProductController::class,
            'image' => Admin\ImageController::class,
            'post' => Admin\PostController::class,
        ]);
        Route::group(['prefix' => 'order'], function () {
            Route::get('/', 'Admin\OrderController@index');
            Route::get('/detail/{id}', 'Admin\OrderController@find');
            Route::post('/status/{id}', 'Admin\OrderController@updateOrderStatus');
        });
    });
});

# ==================================
=======
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

//frontend
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('',[HomeController::class, 'index']);
Route::get('Trangchu',[HomeController::class, 'index']);

//danh muc san pham

Route::get('danh-muc-san-pham/{category_id}',[CategoryController::class, 'show_product_cate']);
Route::get('thuong-hieu-san-pham/{brand_id}',[CategoryController::class, 'show_product_brand']);

//chi tiet san pham
Route::get('chi-tiet-san-pham/{product_id}',[ProductController::class, 'show_details_product']);

//danh gia san pham
Route::post('danh-gia-san-pham/{product_id}',[ProductController::class, 'review_product']);
Route::get('save-review-product',[ProductController::class, 'save_review_product']);




//backend

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'login']);
Route::get('/logout',[AdminController::class,'logout']);

//Category product

Route::get('/all-category_product',[CategoryController::class, 'all_category_product']);
Route::get('/add-category_product',[CategoryController::class, 'add_category_product']);
Route::post('/add-category-product',[CategoryController::class,'save_category_product']);

Route::get('/active-category-product/{category_product_id}',[CategoryController::class, 'active_category_product']);
Route::get('/unactive-category-product/{category_product_id}',[CategoryController::class, 'unactive_category_product']);

Route::get('/edit-category-product/{category_product_id}',[CategoryController::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryController::class, 'delete_category_product']);
Route::post('/update-category-product/{category_product_id}',[CategoryController::class, 'update_category_product']);

//Brand product

Route::get('/all-brand_product',[BrandController::class, 'all_brand_product']);
Route::get('/add-brand_product',[BrandController::class, 'add_brand_product']);
Route::post('/add-brand-product',[BrandController::class,'save_brand_product']);

Route::get('/active-brand-product/{brand_product_id}',[BrandController::class, 'active_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandController::class, 'unactive_brand_product']);

Route::get('/edit-brand-product/{brand_product_id}',[BrandController::class, 'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandController::class, 'delete_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandController::class, 'update_brand_product']);

//Product
Route::get('/all-product',[ProductController::class, 'all_product']);
Route::get('/add-product',[ProductController::class, 'add_product']);


Route::get('active-product/{product_id}',[ProductController::class, 'active_product']);
Route::get('unactive-product/{product_id}',[ProductController::class, 'unactive_product']);



















// Route::get('/all-product',[ProductController::class, 'all_product']);
// Route::get('/add-product',[ProductController::class, 'add_product']);
Route::post('/save-product',[ProductController::class,'save_product']);

// Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);
// Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);

Route::get('/edit-product/{product_id}',[ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class, 'delete_product']);
Route::post('/update-product/{product_id}',[ProductController::class, 'update_product']);
>>>>>>> d9a8d6e (create api login, order detail)
