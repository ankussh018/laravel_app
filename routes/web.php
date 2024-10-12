<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Admin_auth_controller;
use App\Http\Controllers\backend\Admin_home_controller;

// Auth::routes();



Route::get('/', [Admin_auth_controller::class, 'home']);


Route::prefix('admin')->group(function(){

		
		Route::post('/loginauth', [Admin_auth_controller::class, 'login']);
		Route::get('/', [Admin_home_controller::class, 'index'])->middleware('isAdmin');
		Route::get('/dashboard', [Admin_home_controller::class, 'index'])->name('admin.dashboard')->middleware('isAdmin');
		Route::get('/driver-leads', [Admin_home_controller::class, 'driverLeads'])->middleware('isAdmin');
		Route::get('/alldrivers', [DriverLeadsController::class, 'alldrivers'])->middleware('isAdmin');

		Route::get('/payment/{id}', [Admin_home_controller::class, 'redirectToPayment'])->name('payment');


Route::group(['middleware' => ['auth']], function () {

Route::prefix('users')->group(function () {
	    Route::get('/index',  [UserController::class, 'index'])->name('users.index');
		Route::get('/create', [UserController::class, 'create'])->name('users.create');
		Route::post('/store', [UserController::class, 'store'])->name('users.store');
		Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
		Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
		Route::post('/destroy', [UserController::class, 'destroy'])->name('users.destroy');
		Route::post('/show', [UserController::class, 'show'])->name('users.show');
		Route::get('/status_update', [UserController::class, 'status_update'])->name('users.status_update');
			
});

Route::prefix('roles')->group(function () {
		Route::get('/index',  [RoleController::class, 'index'])->name('roles.index');
		Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
		Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
		Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
		Route::post('/update/{id}', [RoleController::class, 'update'])->name('roles.update');
		Route::post('/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');
		Route::post('/show', [RoleController::class, 'show'])->name('roles.show');

});

// Route::prefix('permissions')->group(function () {
		
// 		Route::get('/index', [PermissionController::class, 'index'])->name('permissions.index');
// 		Route::get('/create', [PermissionController::class, 'create'])->name('permissions.create');
// 		Route::post('/store', [PermissionController::class, 'store'])->name('permissions.store');
// 		Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('permissions.edit');
// 		Route::post('/update/{id}', [PermissionController::class, 'update'])->name('permissions.update');
// 		Route::post('/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');

// });

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });



});

Route::get('/logout', [Admin_auth_controller::class, 'logout']);


});