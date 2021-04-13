<?php

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
    return \Illuminate\Support\Facades\Hash::check('123456', '$2y$10$GfJjntfsvxzG.6nKd2nkVOQ5e/6rV9SWD4k8YrvEKblEeUQSKg6BG');
});

Auth::routes();
//Delivary Man
Route::get('/delivaryman', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'index'])->name('delivaryman.all');
Route::get('/delivaryman/create', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'create'])->name('delivaryman.create');
Route::post('/delivaryman/create', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'store'])->name('delivaryman.store');
Route::delete('/delivaryman/delete/{id}', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'destroy'])->name('delivaryman.delete');
Route::get('/delivaryman/edit/{deliveryMan}', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'edit'])->name('delivaryman.edit');
Route::put('/delivaryman/edit/{deliveryMan}', [\App\Http\Controllers\Delivery\DeliveryManController::class, 'update'])->name('delivaryman.update');


//City
Route::get('/city', [\App\Http\Controllers\Delivery\CityController::class, 'index'])->name('city.all');
Route::get('/city/create', [\App\Http\Controllers\Delivery\CityController::class, 'create'])->name('city.create');
Route::post('/city/create', [\App\Http\Controllers\Delivery\CityController::class, 'store'])->name('city.store');
Route::delete('/city/delete/{id}', [\App\Http\Controllers\Delivery\CityController::class, 'destroy'])->name('city.delete');
Route::get('/city/edit/{city}', [\App\Http\Controllers\Delivery\CityController::class, 'edit'])->name('city.edit');
Route::put('/city/edit/{city}', [\App\Http\Controllers\Delivery\CityController::class, 'update'])->name('city.update');

//Area
Route::get('/area', [\App\Http\Controllers\Delivery\AreaController::class, 'index'])->name('area.all');
Route::get('/area/create', [\App\Http\Controllers\Delivery\AreaController::class, 'create'])->name('area.create');
Route::post('/area/create', [\App\Http\Controllers\Delivery\AreaController::class, 'store'])->name('area.store');
Route::delete('/area/delete/{id}', [\App\Http\Controllers\Delivery\AreaController::class, 'destroy'])->name('area.delete');
Route::get('/area/edit/{area}', [\App\Http\Controllers\Delivery\AreaController::class, 'edit'])->name('area.edit');
Route::put('/area/edit/{area}', [\App\Http\Controllers\Delivery\AreaController::class, 'update'])->name('area.update');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/** Start Admin Layout  */
Route::group(['prefix' => 'admins', 'as' => 'admins.', 'middleware' => ['auth']], function () {
    Route::get('/users', [\App\Http\Controllers\Admins\UsersController::class, 'index'])->name('users.all');
    Route::get('/users/create', [\App\Http\Controllers\Admins\UsersController::class, 'create'])->name('users.create');
    Route::post('/users/create', [\App\Http\Controllers\Admins\UsersController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [\App\Http\Controllers\Admins\UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/edit/{id}', [\App\Http\Controllers\Admins\UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{id}', [\App\Http\Controllers\Admins\UsersController::class, 'destroy'])->name('users.delete');
});







/** End Admin Layout */
/** Start Setup Route Group */
Route::group(['prefix' => 'setups', 'as' => 'setups.', 'middleware' => ['auth']], function () {
    /** Start App Config Routes */
    Route::get('/app-configs', [\App\Http\Controllers\Setup\AppConfigController::class, 'index'])->name('app-config.all');
    Route::get('/app-configs/edit/{config}', [\App\Http\Controllers\Setup\AppConfigController::class, 'edit'])->name('app-config.edit');
    Route::put('/app-configs/edit/{config}', [\App\Http\Controllers\Setup\AppConfigController::class, 'update'])->name('app-config.update');
    /** End App Config Routes */

    /** Start Categories Routes */
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/categories', [\App\Http\Controllers\Setup\CategoryController::class, 'index'])->name('all');
        Route::get('/categories/create', [\App\Http\Controllers\Setup\CategoryController::class, 'create'])->name('create');
        Route::post('/categories/create', [\App\Http\Controllers\Setup\CategoryController::class, 'store'])->name('store');
        Route::get('/categories/edit/{category}', [\App\Http\Controllers\Setup\CategoryController::class, 'edit'])->name('edit');
        Route::put('/categories/edit/{category}', [\App\Http\Controllers\Setup\CategoryController::class, 'update'])->name('update');
        Route::delete('/categories/delete/{category}', [\App\Http\Controllers\Setup\CategoryController::class, 'destroy'])->name('delete');
    });
    /** End Categories Routes */

    /** Start Payment Methods Routes */
    Route::group(['prefix' => 'payment-methods', 'as' => 'payment.'], function () {
        Route::get('/payments', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'index'])->name('all');
        Route::get('/payments/create', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'create'])->name('create');
        Route::post('/payments/create', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'store'])->name('store');
        Route::get('/payments/edit/{payment}', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'edit'])->name('edit');
        Route::put('/payments/edit/{payment}', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'update'])->name('update');
        Route::delete('/payments/delete/{payment}', [\App\Http\Controllers\Setup\PaymentMethodsController::class, 'destroy'])->name('delete');
    });
    /** End Payment Methods Routes */

    /** Start Sub Categories Routes  */
    Route::group(['prefix' => 'sub-categories', 'as' => 'sub.category.'], function () {
        Route::get('/', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'index'])->name('all');
        Route::get('/create', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'create'])->name('create');
        Route::get('/show/{subCategory}', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'show'])->name('show');
        Route::post('/create', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'store'])->name('store');
        Route::get('/edit/{subCategory}', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'edit'])->name('edit');
        Route::put('/edit/{subCategory}', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'update'])->name('update');
        Route::delete('/delete/{subCategory}', [\App\Http\Controllers\Setup\SubCategoriesController::class, 'destroy'])->name('delete');
    });
    /** End Sub Categories Routes  */
    /** Start Units Routes */
    Route::group(['prefix' => 'units', 'as' => 'units.'], function () {
        Route::get('/units', [\App\Http\Controllers\Setup\UnitsController::class, 'index'])->name('all');
        Route::get('/units/create', [\App\Http\Controllers\Setup\UnitsController::class, 'create'])->name('create');
        Route::post('/units/create', [\App\Http\Controllers\Setup\UnitsController::class, 'store'])->name('store');
        Route::get('/units/edit/{unit}', [\App\Http\Controllers\Setup\UnitsController::class, 'edit'])->name('edit');
        Route::put('/units/edit/{unit}', [\App\Http\Controllers\Setup\UnitsController::class, 'update'])->name('update');
        Route::delete('/units/delete/{unit}', [\App\Http\Controllers\Setup\UnitsController::class, 'destroy'])->name('delete');
    });
    /** End Units Routes */
});
/** End Setup Route Group */

/** Start Delivery Route Group */
// Route::group(['prefix' => 'delivery', 'as' => 'delivery.', 'middleware' => ['auth']], function () {
//     /** Start Areas Routes */
//     Route::group(['prefix' => 'area', 'as' => 'areas.'], function () {
//         Route::get('/areas', [\App\Http\Controllers\Delivery\AreasController::class, 'index'])->name('all');
//         Route::get('/areas/create', [\App\Http\Controllers\Delivery\AreasController::class, 'create'])->name('create');
//         Route::post('/areas/create', [\App\Http\Controllers\Delivery\AreasController::class, 'store'])->name('store');
//         Route::get('/areas/edit/{area}', [\App\Http\Controllers\Delivery\AreasController::class, 'edit'])->name('edit');
//         Route::put('/areas/edit/{area}', [\App\Http\Controllers\Delivery\AreasController::class, 'update'])->name('update');
//         Route::delete('/areas/delete/{area}', [\App\Http\Controllers\Delivery\AreasController::class, 'destroy'])->name('delete');
//     });
    /** End Areas Routes */

    /** Start Branches Routes */
    Route::group(['prefix' => 'branch', 'as' => 'branches.'], function () {
        Route::get('/branches', [\App\Http\Controllers\Delivery\BranchesController::class, 'index'])->name('all');
        Route::get('/branches/create', [\App\Http\Controllers\Delivery\BranchesController::class, 'create'])->name('create');
        Route::post('/branches/create', [\App\Http\Controllers\Delivery\BranchesController::class, 'store'])->name('store');
        Route::get('/branches/edit/{branch}', [\App\Http\Controllers\Delivery\BranchesController::class, 'edit'])->name('edit');
        Route::put('/branches/edit/{branch}', [\App\Http\Controllers\Delivery\BranchesController::class, 'update'])->name('update');
        Route::delete('/branches/delete/{branch}', [\App\Http\Controllers\Delivery\BranchesController::class, 'destroy'])->name('delete');
    });
    /** End Branches Routes */

    /** Start Delivery Discount Routes */
    Route::group(['prefix' => 'discount', 'as' => 'discounts.'], function () {
        Route::get('/discounts', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'index'])->name('all');
        Route::get('/discounts/create', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'create'])->name('create');
        Route::post('/discounts/create', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'store'])->name('store');
        Route::get('/discounts/edit/{discount}', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'edit'])->name('edit');
        Route::put('/discounts/edit/{discount}', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'update'])->name('update');
        Route::delete('/discounts/delete/{discount}', [\App\Http\Controllers\Delivery\DeliveryDiscountController::class, 'destroy'])->name('delete');
    });
    /** End Delivery Discount Routes */

    /** Start Localization Routes */
    Route::group(['prefix' => 'locality', 'as' => 'localities.'], function () {
        Route::get('/localities', [\App\Http\Controllers\Delivery\LocalizationController::class, 'index'])->name('all');
        Route::get('/localities/create', [\App\Http\Controllers\Delivery\LocalizationController::class, 'create'])->name('create');
        Route::post('/localities/create', [\App\Http\Controllers\Delivery\LocalizationController::class, 'store'])->name('store');
        Route::get('/localities/edit/{locality}', [\App\Http\Controllers\Delivery\LocalizationController::class, 'edit'])->name('edit');
        Route::put('/localities/edit/{locality}', [\App\Http\Controllers\Delivery\LocalizationController::class, 'update'])->name('update');
        Route::delete('/localities/delete/{locality}', [\App\Http\Controllers\Delivery\LocalizationController::class, 'destroy'])->name('delete');
    });
    /** End Localization Routes */
});
/** End Delivery Route Group */
