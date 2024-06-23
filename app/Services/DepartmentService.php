<?php

namespace App\Services;

use App\Models\Departments;
use App\Models\Image;
use Illuminate\Http\Request;

class DepartmentService
{
    public function departmentStore(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|min:6',
            'title_ru' => 'min:6',
            'title_eng' => 'min:6',
            'description_uz' => 'required|min:10',
            'description_ru' => 'min:10',
            'description_en' => 'min:10',
            'image' => 'required|image|mimes:jpeg,svg,png,jpg,gif|max:2048',
        ]);
        $image = new Image();
        $image_path = $request->image->store('public/department_image');
        $image->image_url = $image_path;
        $image->name_image = $request->title_uz;
        $image->save();
        $department = new Departments();
        $department->title_uz = $request->title_uz;
        $department->title_ru = $request->title_ru;
        $department->title_en = $request->title_eng;
        $department->description_uz = $request->description_uz;
        $department->description_ru = $request->description_ru;
        $department->description_en = $request->description_en;
        $department->image_id = $image->id;
        $department->save();
        return $department;
    }

    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'title_uz' => 'required|min:6',
            'title_ru' => 'min:6',
            'title_eng' => 'min:6',
            'description_uz' => 'required|min:10',
            'description_ru' => 'min:10',
            'description_en' => 'min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $department = Departments::findOrFail($id);
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/department_image');
            $department->image()->update([
                'image_url' => $image_path,
                'name_image' => $request->input('title_uz'),
            ]);
        }
        $department->title_uz = $request->title_uz;
        $department->title_ru = $request->title_ru;
        $department->title_en = $request->title_eng;
        $department->description_uz = $request->description_uz;
        $department->description_ru = $request->description_ru;
        $department->description_en = $request->description_eng;
        $department->save();
        return $department;
    }
}
