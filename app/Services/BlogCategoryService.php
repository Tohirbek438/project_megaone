<?php

namespace App\Services;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryService
{
   public function CreateCategory(Request $request){
       $data = $request->validate([
           'title_uz' => 'required|min:5',
           'title_ru' => 'string',
           'title_en' => 'string',
           'slug' => 'required|min:5',
           'status' => 'required'
       ]);
       $category = BlogCategory::create([
           'title_uz' => $data['title_uz'],
           'title_ru' => $data['title_ru'],
           'title_en' => $data['title_en'],
           'slug' => $data['slug'],
           'status' => $data['status'] ?? 1,
       ]);
       return $category;
   }


}
