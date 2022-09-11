<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

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

Route::get('h', function () {
    return view('layouts.layout_admin');
});

//brand
Route::get('add-new-brand', function () {
    return view('testPhp.brand.add_new_brand');
})->name('addNew');

Route::post('add-new-brand', [BrandController::class, 'addNewBrand']);

Route::get('list-brands', [BrandController::class, 'listBrands'])->name('listBrands');

Route::get('delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('deleteBrand');

Route::get('edit-brand/{id}', [BrandController::class, 'showNameBrand'])->name('editBrand');

Route::post('edit-brand/{id}', [BrandController::class, 'updateBrand']);
