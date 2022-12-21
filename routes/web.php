<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Image;
use App\Models\Course;
use App\Models\Comment;
use App\Models\Tag;

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
    return view('welcome');
});

Route::get('/one-to-one-polymorphic', function () {
    $user = User::first();

    $user->image()->save(
        new Image(['path' => 'images/image.png'])
    );

    dd($user->image);
});

Route::get('/one-to-many-polymorphic', function () {
    /* $course = Course::first();

    $course->comments()->create([
        'subject' => 'Novo comentário',
        'content' => 'Apenas um comentário legal novo'
    ]);

    dd($course->comments); */

    $comment = Comment::find(1);

    dd($comment->commentable);
});

Route::get('/many-to-many-polymorphic', function () {
    $user = User::first();

    //$user->tags()->attach(1);

    dd($user->tags);
});