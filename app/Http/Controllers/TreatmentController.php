<?php

namespace App\Http\Controllers;

use App\Models\CategoryForGallery;
use App\Models\Gallery;
use App\Models\TreatmentDisease;
use App\Services\GalleryService;
use App\Services\TreatmentService;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    private $treatService;

    public function __construct(TreatmentService $treatService)
    {
        $this->treatService = $treatService;
    }

    public function index()
    {
        return view('admin.treatment.index', ['treatments' => TreatmentDisease::all()]);
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->treatService->treatmentStore($request);
        return redirect()->route('treatment.index')->with('success', 'Treatment created successfully');
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
        $treatment = TreatmentDisease::findOrFail($id);
        $html = view('admin.treatment.edit-modal', compact('treatment'))->render();
        return response()->json(['message' => true, 'html' => $html, 'treatment' => $treatment]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->treatService->treatmentUpdate($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treatment = TreatmentDisease::findOrFail($id);
        $treatment->delete();
        return redirect()->back();
    }
}
