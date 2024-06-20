<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\CategoryForGallery;
use App\Models\Gallery;
use App\Models\Image;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class MediaAdminController extends Controller
{
    private $mediaService;

    public function __construct(GalleryService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    public function store(Request $request)
    {
        $this->mediaService->createMedia($request);
        return redirect()->route('media.index')->with('success', 'Media created successfully');
    }
    public function index()
    {
        $media = Gallery::paginate(6);
        $category = CategoryForGallery::all();
        return view('admin.media.index', ['medias' => $media,'categories' => $category]);
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


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $media = Gallery::find($id);
        $html = view('admin.media.modal-view', compact('media'))->render();
        return response()->json(['message' => true,'html' => $html,'media' => $media]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $media = Gallery::find($id);
        $categories = CategoryForGallery::all();
        $html = view('admin.media.modal-edit', compact('media','categories'))->render();
        return response()->json(['message' => true,'html' => $html,'media' => $media]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->mediaService->updateMedia($request,$id);
        return redirect()->route('media.index')->with('success', 'Media created successfully');
    }
    public function destroy(string $id)
    {
        $media = Gallery::find($id);
        $image = Image::where('id',$media->image_id)->first();

        if ($media) {
            if ($media->delete()) {
                $image->delete();
                return response()->json(['media' => $media]);
            } else {
                return response()->json(['message' => false]);
            }
        }
    }



}
