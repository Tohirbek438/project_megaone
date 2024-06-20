<?php

namespace App\Http\Controllers;


use App\Models\BlogCategory;
use App\Services\BlogCategoryService;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    private $categoryBlog;


    public function __construct(BlogCategoryService $categoryBlog)
    {
        $this->categoryBlog = $categoryBlog;
    }

    public function index()
    {
        $category = BlogCategory::paginate(10);
        return view('admin.blog.category-blog', ['category' => $category]);
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $this->categoryBlog->CreateCategory($request);
        return redirect()->back();
    }

    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        $blogCategory = BlogCategory::find($id);
        if($blogCategory->delete()) {
            return response()->json(['category' => $blogCategory]);
        }
        else{
            return response()->json(['message' => false]);
        }
        }
}
