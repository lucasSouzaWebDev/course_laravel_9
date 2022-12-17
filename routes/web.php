<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Image;

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
