<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryService
{
    public function createMedia(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_eng' => 'required|string|max:255',
            'alter_image' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
        ]);
        $image_path = $request->file('image')->store('public/media');
        $image = new Image();
        $image->name_image = $request->input('title_uz');
        $image->image_url = $image_path;
        $image->save();
        $media = Gallery::create([
            'name_uz' => $request->input('title_uz'),
            'name_ru' => $request->input('title_ru'),
            'name_en' => $request->input('title_eng'),
            'alter_media' => $request->input('alter_image'),
            'image_id' => $image->id,
            'category_id' => $request->input('category_id'),
        ]);
        return $media;
    }

    public function updateMedia(Request $request, $id)
    {
        $media = Gallery::find($id);
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'string|max:255',
            'title_eng' => 'string|max:255',
            'alter_image' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/media');
            $media->image()->update([
                'image_url' => $image_path,
                'name_image' => $request->input('title_uz'),
            ]);
        }
        $media->update([
            'name_uz' => $request->input('title_uz'),
            'name_ru' => $request->input('title_ru'),
            'name_en' => $request->input('title_eng'),
            'alter_media' => $request->input('alter_image'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('media.index')->with('success', 'Media updated successfully');
    }


}
