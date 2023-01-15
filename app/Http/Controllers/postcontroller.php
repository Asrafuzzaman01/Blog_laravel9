<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;


class postcontroller extends Controller
{
    public function all_post(){
        // $posts = post::with( 'user','category')->get();
        // return  $posts;
    
    
     $category=Category::with('posts')->get();
     return $category;
}
}
