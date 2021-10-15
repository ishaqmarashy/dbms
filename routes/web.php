<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableViewsController;
use App\Http\Controllers\AddToTablesController;
use App\Http\Controllers\GetFromTablesController;

Route::get('/',function (){return(view('/index.home'));})->name('home');
Route::get('/allCustomers', [TableViewsController::class,'allCustomers'])->name('allCustomers');
Route::get('/allRestaurants', [TableViewsController::class,'allRestaurants'])->name('allRestaurants');
Route::get('/allProducts', [TableViewsController::class,'allProducts'])->name('allProducts');
Route::get('/allOrders', [TableViewsController::class,'allOrders'])->name('allOrders');
Route::get('/allCustomerLoyalty', [TableViewsController::class,'allCustomerLoyalty'])->name('allCustomerLoyalty');

Route::get('/addCustomer',function (){return(view('/addForms.addCustomer'));})->name('addCustomer');
Route::post('/addCustomerResult', [AddToTablesController::class,'addCustomerResult'])->name('addCustomerResult');
Route::get('/addCard',function (){return(view('/addForms.addCard'));})->name('addCard');
Route::post('/addCardResult', [AddToTablesController::class,'addCardResult'])->name('addCardResult');
Route::get('/addOrders',function (){return(view('/addForms.addOrders'));})->name('addOrders');
Route::post('/addOrdersResult', [AddToTablesController::class,'addOrdersResult'])->name('addOrdersResult');
Route::get('/addProduct',function (){return(view('/addForms.addProduct'));})->name('addProduct');
Route::post('/addProductResult', [AddToTablesController::class,'addProductResult'])->name('addProductResult');
Route::get('/addProductToOrder',function (){return(view('/addForms.addProductToOrder'));})->name('addProductToOrder');
Route::post('/addProductToOrderResult', [AddToTablesController::class,'addProductToOrderResult'])->name('addProductToOrderResult');
Route::get('/addRestaurant',function (){return(view('/addForms.addRestaurant'));})->name('addRestaurant');
Route::post('/addRestaurantResult', [AddToTablesController::class,'addRestaurantResult'])->name('addRestaurantResult');
Route::get('/addRestaurantLocation',function (){return(view('/addForms.addRestaurantLocation'));})->name('addRestaurantLocation');
Route::post('/addRestaurantLocationResult', [AddToTablesController::class,'addRestaurantLocationResult'])->name('addRestaurantLocationResult');

Route::get('/customerAccount',function (){return(view('/getForms.customerAccount'));})->name('customerAccount');
Route::post('/customerAccountResult', [GetFromTablesController::class,'customerAccountResult'])->name('customerAccountResult');
Route::get('/restaurantProducts',function (){return(view('/getForms.restaurantProducts'));})->name('restaurantProducts');
Route::post('/restaurantProductsResult', [GetFromTablesController::class,'restaurantProductsResult'])->name('restaurantProductsResult');

