<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\Category;
use App\Models\User;
use \Spatie\YamlFrontMatter\YamlFrontMatter;
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
Route::get('hamid',function (){
    return ["foo"=>"bar"];
});
Route::get('posts/{data}', function ($data) {
    $var="this a test from amo";
    ddd($var);
    return redirect('hamid');
//    return view('posts',['post'=>"amo posts"]);
})->where('data','[A-z]+');
Route::get('/',[PostController::class , 'index']);
Route::get('posts/{post:slug}',[PostController::class , 'show']);
Route::get('category/{category:name}',function (Category $category){
    return view('posts',[
        'posts'=>$category->post,


    ]) ;
});
Route::get('users/{user}',function (User $user){
    return view('posts',[
            'posts'=>$user->posts
        ]
    );
});
Route::get('get_url_data',function (){
   echo "dflgsdf";
});
Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::post('logout',[SessionController::class , 'destroy'])->middleware('auth');

Route::get('login',[SessionController::class , 'create'])->middleware('guest');
Route::post('login',[SessionController::class , 'store'])->middleware('guest');



