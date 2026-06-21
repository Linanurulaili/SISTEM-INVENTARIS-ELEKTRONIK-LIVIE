<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutgoingController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard',
        [DashboardController::class,'index']
    )
    ->name('dashboard');

    Route::resource(
        'categories',
        CategoryController::class
    );

    Route::resource(
        'suppliers',
        SupplierController::class
    );

    Route::resource(
        'products',
        ProductController::class
    );

    Route::resource(
        'incoming',
        IncomingController::class
    );
    
    Route::resource(
        'outgoing',
        OutgoingController::class
    );

    Route::get(
        '/reports',
        [ReportController::class,'index']
    );

});

require __DIR__.'/auth.php';