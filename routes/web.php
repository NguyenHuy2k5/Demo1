<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.products.list');
});
Route::get('/uri', function () {
    return "Hello world";
});



Route::get('/uri', function () {
    return view();
});

// tra thang ve

Route::view('/huy', 'huy');


// truyen tham so

Route::get('/uri/{id}', function ($id) {
    return 'Huy so:' . $id;
});



Route::get('/user{id}/commet{c_id}', function ($id, $c_id) {
    return 'huy so' . $id . '<br>comment' . $c_id . '<hr>'; });
Route::get('/user/{id?}/commet/{c_id?}', function ($id = "huy", $c_id = "huy") {
    return 'huy so' . $id . '<br>comment' . $c_id . '<hr>'; });

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.detail');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});
