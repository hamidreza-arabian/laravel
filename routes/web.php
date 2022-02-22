<?php

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
Route::get('/',function (){
    $post = Post::latest();
    if (request('search')){
        $post
            ->where('title','like','%' . request('search') . '%')
            ->orwhere('description','like','%' . request('search') . '%');

    }
    return view("posts",
        [
            'posts' =>$post->get(),
            'categories'=>Category::all()
        ]);
});
Route::get('posts/{post:slug}',function (Post $post){
    return view('test_data',[
        'post'=>$post,
        'categories'=>Category::all()

    ]) ;
});
Route::get('category/{category:name}',function (Category $category){
    return view('posts',[
        'posts'=>$category->post,
        'CurrentCategory'=> $category,
        'categories'=>Category::all()

    ]) ;
});
Route::get('get_url_data',function (){
   echo "dflgsdf";
});


Route::get('users/{user}',function (User $user){
    return view('posts',[
            'posts'=>$user->posts
        ]
    );
});
