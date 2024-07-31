<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Vendor; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [HomeController::class, 'showProfile']);
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/packageaddition', [HomeController::class, 'packageaddition'])->name('admin.packageaddition');
    Route::post('admin/packagestore', [HomeController::class, 'packagestore'])->name('admin.packagestore');
    Route::delete('admin/package/{id}', [HomeController::class, 'packagedestroy'])->name('admin.packagedestroy');
    Route::get('/admin/editpackage/{id}', [HomeController::class, 'editPackage'])->name('admin.editpackage');
    Route::post('/admin/updatepackage/{id}', [HomeController::class, 'updatePackage'])->name('admin.updatepackage');

    Route::get('admin/categories', [HomeController::class, 'categories'])->name('admin.categories');
    Route::post('admin/categoriestore', [HomeController::class, 'categoriestore'])->name('admin.categoriestore');
    Route::get('admin/editcategories', [HomeController::class, 'editcategories'])->name('admin.editcategories');
    Route::delete('admin/categories/{id}', [HomeController::class, 'destroyCategory'])->name('admin.categorystore');

    Route::get('admin/partnerslist', [HomeController::class, 'partnerslist'])->name('admin.partnerslist');
    Route::get('/vendor/vendordashboard', [HomeController::class, 'showVendorRegistration'])->name('vendor.registration');
    Route::get('vendor/createpartner', [HomeController::class, 'createpartner'])->name('vendor.createpartner');
    Route::post('admin/partnerstore', [HomeController::class, 'partnerstore'])->name('admin.partnerstore');
   
    Route::get('admin/ads', [HomeController::class, 'ads'])->name('admin.ads');
    Route::get('admin/ads/create', [HomeController::class, 'create'])->name('admin.ads.create');
    Route::post('admin/ads', [HomeController::class, 'storeAd'])->name('admin.ads.store');
    Route::get('admin/ads/{id}/edit', [HomeController::class, 'edit'])->name('admin.ads.edit');
    Route::put('admin/ads/{id}', [HomeController::class, 'update'])->name('admin.ads.update');
    Route::delete('admin/ads/{id}', [HomeController::class, 'destroy'])->name('admin.ads.destroy');

    Route::get('admin/discountaddition', [HomeController::class, 'discountaddition'])->name('admin.discountaddition');
    Route::post('admin/discountstore', [HomeController::class, 'discountstore'])->name('discounts.store');
    Route::get('admin/discountedit/{id}', [HomeController::class, 'discountedit'])->name('admin.discountedit');
    Route::put('admin/discountupdate/{id}', [HomeController::class, 'discountupdate'])->name('discounts.update');
    Route::delete('admin/discountdestroy/{id}', [HomeController::class, 'discountdestroy'])->name('discounts.destroy');

    
});


Route::middleware(['auth', 'vendor'])->group(function() {
    Route::get('vendor/vendordashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
    Route::post('vendor/partnerstore', [VendorController::class, 'partnerstore'])->name('vendor.partnerstore');
    // Route::get('/vendor', Vendor::class)->name('vendor.registration');
 

Route::get('/vendor-registration', function () {
    return view('vendor-registration');
})->name('vendor.registration');

});



   Route::get('employee/employeedashboard', [EmployeeController::class, 'index'])
   ->middleware(['auth', 'employee']);

   Route::get('user/index', [UserController::class, 'index'])
   ->middleware(['auth', 'user']);
