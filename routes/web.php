<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use App\Models\BlogComment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/dashboard');;
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/about', function () {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    $count = Comment::count();
    return view('about', ['comments' => $comments,'count'=>$count]);
})->name('about');
Route::get('/blog', function () {
    $comments = BlogComment::orderBy('created_at', 'desc')->get();
    $count = BlogComment::count();
    return view('blog', ['comments' => $comments,'count'=>$count]);
})->name('blog');
Route::get('/contact', function () {
    return view('contact');
});

// login register
Route::get('/login', function () {
    return view('users.login');
});
Route::get('/register', function () {
    return view('users.register');
});

Route::post('/register/post', [UserController::class, 'register'])->name('register.post');
Route::post('/login/post', [UserController::class, 'login'])->name('login.post');
Route::get('/logout', [UserController::class,'logout'])->name('logout');

//comment
Route::post('/comment/create', [CommentController::class,'create'])->name('comment.create');
Route::get('/comment/reply/{id}', '@create')->name('comment.reply');
Route::delete('/comment/{comment}', [CommentController::class,'destroy'])->name('comment.destroy');

Route::post('/blog/comment/create', [CommentController::class,'blog_create'])->name('blog.comment.create');
Route::get('/blog/comment/reply/{id}', '@create')->name('blog.comment.reply');
Route::delete('/blog/comment/{comment}', [CommentController::class,'blog_destroy'])->name('blog.comment.destroy');

//profile
Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
Route::patch('/profile/update', [UserController::class, 'update'])->name('profile.update');
