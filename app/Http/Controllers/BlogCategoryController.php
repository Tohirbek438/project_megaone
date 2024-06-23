<?php

namespace App\Http\Controllers;


use App\Models\BlogCategory;
use App\Models\Menus;
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
         $category_blog = BlogCategory::findOrFail($id);
        $html = view('admin.blog.edit-category-modal', compact('category_blog'))->render();
        return response()->json(['message' => true, 'html' => $html, 'category' => $category_blog]);
    }
    public function update(Request $request, string $id)
    {
        $category = BlogCategory::find($id);
        $data = $request->validate([
            'title_uz' => 'required|min:5',
            'slug' => 'required|min:5',
            'title_ru' => 'string',
            'title_en' => 'string',
            'status' => 'required'
        ]);
        $category->title_uz = $data['title_uz'];
        $category->title_ru = $data['title_ru'];
        $category->title_en = $data['title_en'];
        $category->slug = $data['slug'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->route('category-blog.index');
    }
    public function destroy(string $id)
    {
        $blogCategory = BlogCategory::find($id);
        if ($blogCategory->delete()) {
            $deletedBlogs = 0;
            foreach ($blogCategory->blog as $blog) {
                if ($blog->delete()) {
                    $deletedBlogs++;
                }
            }
            return response()->json([
                'message' => 'Category deleted successfully.',
                'associated_blogs_deleted' => $deletedBlogs
            ]);
        } else {
            return response()->json(['message' => 'Category deletion failed.']);
        }
    }
}
