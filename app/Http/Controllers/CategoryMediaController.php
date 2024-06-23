<?php

namespace App\Http\Controllers;

use App\Models\CategoryForGallery;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.media.category',['categories' => CategoryForGallery::all()]);
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_uz' => 'required|string',
            'title_ru' => 'required|string',
            'title_eng' => 'required|string',
            'menu_id' => 'required|exists:menuses,id',
        ]);
        $mediaCategory = new CategoryForGallery();
        $mediaCategory->title_uz = $validatedData['title_uz'];
        $mediaCategory->title_ru = $validatedData['title_ru'];
        $mediaCategory->title_en = $validatedData['title_eng'];
        $mediaCategory->menu_id = $validatedData['menu_id'];
        $mediaCategory->save();
        return redirect()->route('category-media.index')->with('success', 'Media category created successfully.');
    }
    public function show(string $id)
    {

    }

    public function edit($id)
    {
        $category = CategoryForGallery::findOrFail($id);
        $html = view('admin.media.category-modal-edit', compact('category'))->render();
        return response()->json(['message' => true,'html' => $html,'categories' => $category]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title_uz' => 'required|min:5',
            'title_ru' => 'min:5',
            'title_en' => 'min:5',
             'menu_id' => 'required'
        ]);
        $category = CategoryForGallery::findOrFail($id);
        $category->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CategoryForGallery::findOrFail($id);
        $deletedMedia = 0;
        $category->delete();
        foreach ($category->gallery as $media) {
            if ($media->delete()) {
                $deletedMedia++ ;
            }
        }
        return redirect()->back();
    }
}
