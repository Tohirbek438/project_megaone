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
        $page = Page::where('name_uz',$name)->first();
        if(isset($page)) {
            return view('admin.page.view-page', ['page' => $page]);
        }
        else{
            return view('error.404');
        }
        }
    public function edit($id)
    {
        return view('admin.page.edit',['page' => Page::find($id),'pages' => Menus::all()]);
    }

    public function update(Request $request, string $id)
    {
        $this->pageService->Pageupdate($request,$id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        if($page->delete()){
            return redirect()->back();
        }
    }
}
