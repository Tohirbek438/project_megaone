<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;

class BlogService
{
    public function getCreateBlogs(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'writer_by' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_category' => 'required|exists:blog_categories,id',
            'description_uz' => 'required|string',
        ]);
        $title_uz = $request->input('title_uz');
        $title_ru = $request->input('title_ru');
        $title_en = $request->input('title_eng');
        $writer_by = $request->input('writer_by');
        $image = $request->file('image');
        $blog_category = $request->input('blog_category');
        $description_uz = $request->input('description_uz');
        $description_ru = $request->input('description_ru');
        $description_en = $request->input('description_eng');
        $image_path = $image->store('public/blog_images');
        $image = new Image();
        $image->name_image = $title_uz;
        $image->image_url = $image_path;
        $image->save();
        $blog = Blog::create([
            'title_uz' => $title_uz,
            'title_ru' => $title_ru,
            'title_en' => $title_en,
            'writer_by' => $writer_by,
            'blog_category_id' => $blog_category,
            'description_uz' => $description_uz,
            'description_ru' => $description_ru,
            'description_en' => $description_en,
            'image_id' => $image->id
        ]);

        return $blog;
    }

    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'writer_by' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_category' => 'required|exists:blog_categories,id',
            'description_uz' => 'required|string',
            'description_ru' => 'string|min:10|max:255'
        ]);
        $blog = Blog::find($id);
        $blog->title_uz = $request->input('title_uz');
        $blog->title_en = $request->input('title_eng');
        $blog->title_ru = $request->input('title_ru');
        $blog->blog_category_id = $request->input('blog_category');
        $blog->writer_by = $request->input('writer_by');
        $blog->description_uz = $request->input('description_uz');
        $blog->description_ru = $request->input('description_ru');
        $blog->description_en = $request->input('description_uz');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = $image->store('public/blog_images');
            $image = Image::find($blog->image_id);
            $image->name_image = $request->input('title_uz');
            $image->image_url = $image_path;
        }
        $blog->save();
        return $blog;
    }

}
