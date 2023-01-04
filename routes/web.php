<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Api\FacebookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\SupportCustomerMailController;
use App\Mail\SupportCustomer;

#adminLogin

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);
Route::get('admin/logout',[LoginController::class,'logout']);

#adminChangePassword

Route::get('admin/showChangePasswordForm',[LoginController::class,'showChangePasswordForm']);
Route::post('admin/changePassword',[LoginController::class,'changePassword'])->name('changePassword');


Route::prefix('admin')->group(function (){
    Route::middleware(['auth']) ->group(function (){
        Route::get('/',[MainController::class,'index']) -> name('admin');
        Route::get('main',[MainController::class,'index']);

        #menus

        Route::prefix('menus')->group(function (){
            Route::get('add',[MenuController::class,'create']);
            Route::post('add',[MenuController::class,'store']);
            Route::get('list',[MenuController::class,'index']);
            Route::get('edit/{menu}',[MenuController::class,'show']);
            Route::post('edit/{menu}',[MenuController::class,'update']);
            Route::post('destroy/{id}',[MenuController::class,'destroy']);
        });

        #product

        Route::prefix('product')->group(function (){
            Route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::post('list',[ProductController::class,'store']);
            Route::get('edit/{product}',[ProductController::class,'show']);
            Route::post('edit/{product}',[ProductController::class,'update']);
            Route::post('destroy/{id}',[ProductController::class,'destroy']);
        });

        #slider

        Route::prefix('sliders')->group(function (){
            Route::get('add',[SliderController::class,'create']);
            Route::post('add',[SliderController::class,'store']);
            Route::get('list',[SliderController::class,'index']);
            Route::get('edit/{slider}',[SliderController::class,'show']);
            Route::post('edit/{slider}',[SliderController::class,'update']);
            Route::post('destroy/{id}',[SliderController::class,'destroy']);
        });

        #upload

        Route::post('upload/services',[UploadController::class,'store']);

        #order

        Route::get('customers',[OrderController::class,'index'])->name('customer');
        Route::get('customers/view/{customer}',[OrderController::class,'show']);
        Route::get('ship/{id}',[OrderController::class,'active']);
        Route::get('successShip/{id}',[OrderController::class,'successShip']);
        Route::get('cancelShip/{id}',[OrderController::class,'cancelShip']);


        #acount
        Route::get('acounts',[LoginController::class,'showAdmin']);
        Route::get('acounts/user',[LoginController::class,'show']);
        Route::get('acounts/destroy/{id}',[LoginController::class,'deleteUser']);
        Route::get('acounts/edit/{id}',[LoginController::class,'editUser']);

    });

});

#Home

    Route::get('/', [HomeController::class, 'index']) ->name('home');

    #register

    Route::get('register', [UserLoginController::class, 'register']);
    Route::post('register', [UserLoginController::class, 'create']);

    #login

    Route::get('login', [UserLoginController::class, 'index']) ->name('login-home');
    Route::post('login', [UserLoginController::class, 'login']);
    Route::get('logout', [UserLoginController::class, 'logout']);

    #login google

    Route::get('api/redirect', [GoogleController::class, 'getGoogleSignInUrl'])->name('loginGoogle');
    Route::get('api/callback', [GoogleController::class, 'loginCallback']);

    #login facebook

    Route::get('redirect/facebook', [FacebookController::class, 'redirectToFacebook'])->name('loginFacebook');
    Route::get('callback/facebook', [FacebookController::class, 'facebookSignin']);

    #changePassword

    Route::get('changePassword', [UserLoginController::class, 'showChangePasswordForm']);
    Route::post('changePassword', [UserLoginController::class, 'changePassword']);

    #loadProduct

    Route::post('service/load-product', [HomeController::class, 'loadProduct']);

    #loadCategory

    Route::get('danh-muc/{id}-{slug}.html', [CategoryController::class, 'index']);

    #productDetail

    Route::get('san-pham/{id}-{slug}.html', [HomeProductController::class, 'index']);

    #addToCart

    Route::post('add-cart', [CartController::class, 'index']);
    Route::get('carts', [CartController::class, 'show']);
    Route::post('update-cart', [CartController::class, 'update']);
    Route::get('carts/delete/{id}', [CartController::class, 'remove']);
    Route::post('carts', [CartController::class, 'order']);

    #orderStatus
    Route::get('orderStatus',[OrderStatusController::class,'show']);
    Route::post('orderStatus/destroy/{id}',[OrderStatusController::class,'destroy']);

    #information
    Route::get('infor',[InformationController::class,'show']);

    #contact
    Route::get('contact',[InformationController::class,'contact']);

    #suportCustomer
    Route::get('support',[SupportCustomerMailController::class,'index'])->name('support');
    Route::post('support',[SupportCustomerMailController::class,'support']);

    #comment
    Route::post('comment/product/{id}',[CommentController::class,'comment']);












