<?php

namespace App\Services;

use App\Models\Menus;
use Illuminate\Http\Request;

class MenuService
{
    public function Menustore(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'min:6',
            'name_eng' => 'min:8',
            'status' => 'required',
            'tags' => 'required'
        ]);
        $menu = new Menus();
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_eng = $request->name_eng;
        $menu->status = $request->status;
        $menu->tags = $request->tags;
        $menu->save();
        return $menu;
    }
    public function Menuupdate(Request $request,$id)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'min:6',
            'name_eng' => 'min:8',
            'status' => 'required',
            'tags' => 'required'
        ]);
        $menu = Menus::find($id);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_eng = $request->name_eng;
        $menu->status = $request->status;
        $menu->tags = $request->tags;
        $menu->save();
        return $menu;
    }
}
