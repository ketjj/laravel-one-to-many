<?php

namespace App;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function SlugGen($title){
        $slug = Str::slug($title, '-');
        $base_slug = $slug;
        $existed_post = Post::where('slug', $slug)->first();
        $count = 1;
        while($existed_post ){
            $slug = $base_slug .'-'.$count;
            $count++;
            $existed_post = Post::where('slug', $slug)->first();
        }
        return $slug;
    }

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author'
    ];
}
