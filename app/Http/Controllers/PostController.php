<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Category;
use App\Models\User;
class PostController extends Controller
{
    public function index(){
       return view("posts",
           [
               'posts' =>Post::latest()->filter(request(['search','category']))->paginate(3)->WithQueryString(),


           ]);
   }
    public function show(Post $post){
        return view('test_data',[
            'post'=>$post,


        ]) ;
    }

}
