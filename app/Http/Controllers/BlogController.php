<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('blogs.index',['blogs' => $blog]);
    }

    public function show(){
        return view('blogs.show');
    }
}
