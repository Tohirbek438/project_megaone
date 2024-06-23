<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Image;
use App\Models\TreatmentDisease;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.home.info-site', ['pages' => HomePage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $menu = new HomePage;
        $request->validate([
            'name_uz' => 'required',
            'description_uz' => 'required|min:10|max:250',
            'status' => 'required',
        ]);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_eng;
        $menu->description_uz = $request->description_uz;
        $menu->description_ru = $request->description_ru;
        $menu->description_en = $request->description_eng;
        $menu->status = $request->status;
        $menu->icon = $request->icon;
        $menu->save();
        return redirect()->route('home.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = HomePage::findOrFail($id);
        $html = view('admin.home.show-modal', compact('page'))->render();
        return response()->json(['message' => true, 'html' => $html, 'page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = HomePage::findOrFail($id);
        $html = view('admin.home.edit-modal', compact('page'))->render();
        return response()->json(['message' => true, 'html' => $html, 'page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_uz' => 'required',
            'description_uz' => 'required|min:10|max:250',
            'status' => 'required',
            'icon' => 'required'
        ]);
        $menu = HomePage::find($id);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_eng;
        $menu->description_uz = $request->description_uz;
        $menu->description_ru = $request->description_ru;
        $menu->description_en = $request->description_eng;
        $menu->status = $request->status;
        $menu->icon = $request->icon;
        $menu->save();
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
