<?php

namespace App\Http\Controllers;

use App\Models\InformatinPatient;
use App\Models\Menus;
use App\Services\MenuService;
use App\Services\TreatmentService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index()
    {
        return view('admin.page.menu-category',['pages' => Menus::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
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
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menus::findOrFail($id);
        $html = view('admin.page.edit-modal', compact('menu'))->render();
        return response()->json(['message' => true, 'html' => $html, 'menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
//        $this->menuService->Menuupdate($request,$id);
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menus::findOrFail($id);
        $menu->delete();
        return response()->json(['message' => 'success']);
    }
}
