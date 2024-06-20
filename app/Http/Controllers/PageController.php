<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Menus;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{

    private $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index()
    {
     return view('admin.page.index',['pages' => Page::all()]);
    }

    public function create()
    {

        return view('admin.page.create', ['pages' => Menus::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
       $this->pageService->Pagestore($request);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        return view('admin.page.view-page',['page' => Page::where('name_uz',$name)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.page.edit',['page' => Page::find($id),'pages' => Menus::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->pageService->Pageupdate($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
