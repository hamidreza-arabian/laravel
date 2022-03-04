<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $with = ['category','author'];
//    protected $fillable=['title','description'];

    public function scopeFilter($query , array $filter){
        $query->when($filter['search'] ?? false , function ($query , $hamid){
            $query->where(fn($query)=>
                $query->where('title','like','%' . $hamid . '%')
                ->orwhere('description','like','%' . $hamid . '%')
            );
        });
        $query->when($filter['category'] ?? false , function ($query , $category){
            $query
                ->whereHas('category',fn($query) =>
                    $query->where('name',$category)
                );
        });
//        if ($filter['search'] ?? false){
//
//            $query
//                ->where('title','like','%' . $filter['search'] . '%')
//                ->orwhere('description','like','%' . $filter['search'] . '%');
//
//        }
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
