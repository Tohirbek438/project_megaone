<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menus;
use Illuminate\Http\Request;

class FilterBlogController extends Controller
{
    public function filter(Request $request)
    {
        $menu = Menus::where('tags', 'ourblogs')->first();
        $searchTerm = $request->input('search');
        $results = Blog::where('title_uz', 'like', '%' . $searchTerm . '%')
            ->orWhere('title_ru', 'like', '%' . $searchTerm . '%')
            ->orWhere('title_en', 'like', '%' . $searchTerm . '%')
            ->get();

        return view('blogs.search', ['results' => $results, 'menu' => $menu]);
    }
}
