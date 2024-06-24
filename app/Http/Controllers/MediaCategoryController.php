<?php

namespace App\Http\Controllers;

use App\Models\CategoryForGallery;
use App\Models\Gallery;
use Illuminate\Http\Request;

class MediaCategoryController extends Controller
{
    public function category($name)
    {
        $category = CategoryForGallery::where('title_uz', $name)->first();
        if(isset($category)) {
            $categories = CategoryForGallery::all();
            $medias = Gallery::where('category_id', $category->id)->paginate(1);
            return view('admin.media.category-gallery', compact('medias', 'categories'));
        }
        else{
            return view('error.404');
        }
        }
}
