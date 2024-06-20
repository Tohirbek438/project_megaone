<?php

namespace App\Services;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryService
{
   public function CreateCategory(Request $request){
       $data = $request->validate([
           'title_uz' => 'required|min:5',
           'slug' => 'required|min:5',
           'description_uz' => 'required',
           'status' => 'required'
       ]);
       $category = BlogCategory::create([
           'title_uz' => $data['title_uz'],
           'slug' => $data['slug'],
           'description_uz' => $data['description_uz'],
           'status' => $data['status'] ?? 1,
       ]);
       return $category;
   }


}
