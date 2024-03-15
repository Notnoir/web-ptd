<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use App\Models\ReplyComments;
use App\Models\BlogComment;
use App\Models\ReplyBlogComment;

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
    $reply = ReplyComments::where('reply_to', $comments['0'])->get();
    return view('about', ['comments' => $comments,'count'=>$count,'reply'=>$reply]);
})->name('about');
Route::get('/blog', function () {
    $comments = BlogComment::orderBy('created_at', 'desc')->get();
    $count = BlogComment::count();
    $reply = ReplyBlogComment::where('reply_to', $comments['0'])->get();
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

//comment about
Route::post('/about/comment/create', [CommentController::class,'create'])->name('comment.create');
Route::post('/about/comment/reply', [CommentController::class,'reply'])->name('comment.reply');
Route::delete('/about/comment/{comment}', [CommentController::class,'destroy'])->name('comment.destroy');


//comment blog
Route::post('/blog/comment/create', [CommentController::class,'blog_create'])->name('blog.comment.create');
Route::post('/blog/comment/reply', '@create')->name('blog.comment.reply');
Route::delete('/blog/comment/{comment}', [CommentController::class,'blog_destroy'])->name('blog.comment.destroy');

//profile
Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
Route::patch('/profile/update', [UserController::class, 'update'])->name('profile.update');
