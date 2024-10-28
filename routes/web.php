<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SocialController;
use App\Models\Admin;
use App\Models\Posts;
use  App\Models\User;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/article/{slug}',[UserController::class,'singleArticle'])->name('posts.show');
Route::get('/category/{id}',[CategoryController::class,'showCategory'])->name('category');

Route::get('/contact', function () {
    return view('User.contact');
});



Route::get('/about', function () {
    return view('User.about');
});
Route::get('/404', function () {
    return view('User.404');
});


Route::get('/forms', function () {
    return view('Admin.forms');
});
Route::get('/tables', function () {
    return view('Admin.tables');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/author/{id}',[HomeController::class,'author'])->name('author');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'show']);
Route::post('/comments/{comment}/reply', [CommentController::class, 'storeReply'])->name('comments.reply');



Route::middleware('auth:admin')->group(function () {
Route::get('/dashboard/admin', [HomeController::class,'admin'])->middleware('auth:admin');
Route::get('admin/post', [AdminController::class, 'index']);
Route::get('admin/{id}/delete', [AdminController::class, 'destroy']);
Route::get('admin/{id}/status', [AdminController::class, 'edit']);
Route::put('admin/{id}/status', [AdminController::class, 'update']);
Route::get('category/admin', [CategoryController::class, 'category']);
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/create', [CategoryController::class, 'store']);
Route::get('category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('category/{id}/edit', [CategoryController::class, 'update']);
Route::get('category/{id}/delete', [CategoryController::class, 'destroy']);
Route::get('admin/user', [AdminController::class, 'Users']);
Route::get('user/{id}/edit', [AdminController::class, 'editUser']);
Route::put('user/{id}/edit', [AdminController::class, 'updateUser']);
Route::get('user/{id}/delete', [AdminController::class, 'destroyUser']);
Route::get('admin/writer', [AdminController::class, 'Writers']);
Route::get('writer/{id}/update', [AdminController::class, 'editWriter']);
Route::put('writer/{id}/update', [AdminController::class, 'updateWriter']);
Route::get('writer/{id}/destroy', [AdminController::class, 'destroyWriter']);

Route::get('/admin/Comment',[CommentController::class,'displayComments']);
Route::get('/admin/Comment/{id}/delete',[CommentController::class,'destroyComment'])->name('comments.delete');

Route::get('/admin/{id}/edit',[AdminController::class,'editAdmin']);
Route::put('/admin/{id}/edit',[AdminController::class,'updateAdmin']);

});




Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);





Route::get('/login/writer', [LoginController::class, 'showWriterLoginForm']);
Route::get('/register/writer', [RegisterController::class, 'showWriterRegisterForm']);
Route::post('/login/writer', [LoginController::class, 'writerLogin']);
Route::post('/register/writer', [RegisterController::class, 'createWriter']);



//POST
Route::middleware('auth:writer')->group(function () {
    Route::get('/writer', [HomeController::class, 'writer']);
    Route::get('writer/create', [HomeController::class, 'create']);
    Route::post('writer/create', [HomeController::class, 'store']);
    Route::get('writer/{id}/edit', [HomeController::class, 'edit']);
    Route::put('writer/{id}/edit', [HomeController::class, 'update']);
    Route::get('writer/{id}/delete', [HomeController::class, 'destroy']);


    Route::get('/accounts', [SocialController::class, 'index']);
    Route::get('writer/accounts', [SocialController::class, 'create']);
    Route::post('writer/accounts', [SocialController::class, 'store']);
    Route::get('accounts/{id}/edit', [SocialController::class, 'edit']);
    Route::put('accounts/{id}/edit', [SocialController::class, 'update']);
    Route::get('accounts/{id}/delete', [SocialController::class, 'destroy']);
    

  
Route::get('author/{id}/update', [HomeController::class, 'editWriter'])->name('author.edit');
Route::put('author/{id}/update', [HomeController::class, 'updateWriter'])->name('author.update');

    
});




Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
