<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class PageService
{
    public function Pagestore(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'title_uz' => 'required',
            'description_uz' => 'required',
            'date' => 'required|date',
            'tags' => 'required',
            'image' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        $page = new Page();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/page');
            $image = new Image();
            $image->name_image = $request->name_uz;
            $image->image_url = $imagePath;
            $image->save();
            $page->image_id = $image->id;
        }
        $page->name_uz = $request->name_uz;
        $page->name_ru = $request->name_ru ?? null;
        $page->name_eng = $request->name_eng ?? null;
        $page->title_uz = $request->title_uz;
        $page->title_ru = $request->title_ru ?? null;
        $page->title_eng = $request->title_eng ?? null;
        $page->description_uz = $request->description_uz;
        $page->description_ru = $request->description_ru ?? null;
        $page->description_eng = $request->description_eng ?? null;
        $page->date = $request->date;
        $page->tags = $request->tags;
        $page->status = $request->status;
        $page->menu_category = $request->category_id;
        $page->save();

        return $page;
    }

    public function Pageupdate(Request $request,$id)
    {
        $request->validate([
            'name_uz' => 'required',
            'title_uz' => 'required',
            'description_uz' => 'required',
            'date' => 'required|date',
            'tags' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        $page = Page::find($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/page');
            $image = Image::where('id',$page->image_id)->first();
            $image->name_image = $request->name_uz;
            $image->image_url = $imagePath;
            $image->save();
            $page->image_id = $image->id;
        }
        $page->name_uz = $request->name_uz;
        $page->name_ru = $request->name_ru ?? null;
        $page->title_uz = $request->title_uz;
        $page->title_ru = $request->title_ru ?? null;
        $page->description_uz = $request->description_uz;
        $page->description_ru = $request->description_ru ?? null;
        $page->date = $request->date;
        $page->tags = $request->tags;
        $page->status = $request->status;
        $page->menu_category = $request->category_id;
        $page->save();

        return $page;
    }


}
