<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Image;
use App\Services\BlogService;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = Blog::paginate(1);
        $blogCategory = BlogCategory::all();
        return view('admin.blog.blog-all', ['blogs' => $blogs, 'blogCategory' => $blogCategory]);
    }

    public function create()
    {
        $blogCategory = BlogCategory::all();
        return view('admin.blog.create', ['blogCategories' => $blogCategory]);
    }

    public function store(Request $request)
    {
        $this->blogService->getCreateBlogs($request);
        return redirect()->route('blog.index')->with('success', 'Blog post created successfully');
    }

    public function show(string $id)
    {

    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blogCategory = BlogCategory::all();
        return view('admin.blog.edit', ['blog' => $blog, 'blogCategories' => $blogCategory]);
    }

    public function update(Request $request, string $id)
    {
        $this->blogService->updateBlog($request, $id);
        return redirect()->route('blog.index')->with('success', 'Blog post created successfully');

    }

    public function destroy(string $id)
    {
     $blog = Blog::find($id);
     $image = Image::find($blog->image_id);
     $blog->delete();
     $image->delete();
     return redirect()->route('blog.index')->with('success', 'Blog post created successfully');
    }

}
