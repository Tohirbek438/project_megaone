<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Menus;
use App\Models\Page;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($name = null){
        if($name == null) {
            $blogs = Blog::paginate(1); // Fetch all blogs with pagination
            $categories = BlogCategory::all();
            $menu = Menus::where('tags', 'ourblogs')->first();
            return view('blogs.index', ['blogs' => $blogs, 'categories' => $categories, 'menu' => $menu]);
        }
        else{
            $categories = BlogCategory::all();
            $category_name = BlogCategory::with('blog')->where('title_uz',$name)->first();
            $menu = Menus::where('tags', 'ourblogs')->first();
            $blogs = $category_name->blog()->paginate(1);
            return view('blogs.index', ['blogs' => $blogs, 'categories' => $categories, 'menu' => $menu]);
        }
    }
    public function show($id){
        $blog = Blog::find($id);
        if(isset($blog)) {
            $categories = BlogCategory::all();
            $menu = Menus::where('tags', 'ourblogs')->first();
            $last_blogs = Blog::orderBy('id', 'DESC')->limit(3)->get();
            return view('blogs.show', ['blog' => $blog, 'categories' => $categories, 'menu' => $menu, 'last_blogs' => $last_blogs]);
        }
        else{
            return view('error.404');
        }
        }
}
