<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Route::get('/', function () {
    return view('home');
})
    ->middleware('auth')
    ->name('home');


Route::get('/login', [SessionController::class, 'show'])
    ->name('login');

Route::post('/authenticate', [SessionController::class, 'create'])
    ->name('login.create');

Route::post('/logout', [SessionController::class, 'destroy'])
    ->name('logout');

//ADMIN
Route::middleware('auth')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});



















//Route::get('/authors', function () {
//    $authors = User::all();
//    return view('authors', ["authors" => $authors, "page_title" => 'Utilisateurs']);
//});


//Route::get('/authors/{author:slug}', function (User $author) {
//    $author->load('posts.category');
//    $posts = $author->posts;
//    $posts->load('author');
//
//    return view('posts.index', [
//        "posts" => $posts,
//        "categories" => Category::whereHas('posts')->orderBy('name')->get(),
//        "authors" => User::all()
//    ]);
//});
//

//Route::get('/categories/{category:slug}', function (Category $category) {
//    $category->load('posts.author');
//    $posts = $category->posts;
//    $posts->load('category');
//
//    return view('posts', [
//        "posts" => $posts,
//        "categories" => Category::whereHas('posts')->orderBy('name')->get(),
//        "authors" => User::all(),
//        "currentCategory" => $category
//    ]);
//})->name('single-category');


//Route::get('/categories', function () {
//    $categories = Category::all();
//    return view('categories', ["categories" => $categories, "page_title" => 'Catégories']);
//});
