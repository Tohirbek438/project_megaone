<?php

namespace App\Http\Controllers;

use App\Models\InformatinPatient;
use App\Models\TreatmentDisease;
use App\Services\DepartmentService;
use App\Services\InformationService;
use Illuminate\Http\Request;

class InformationPatientController extends Controller
{
    private $informationService;

    public function __construct(InformationService $informationService)
    {
        $this->informationService = $informationService;
    }

    public function index()
    {
        return view('admin.information.index', ['informations' => InformatinPatient::all()]);
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
        $this->informationService->createInformation($request);
        return redirect()->back();
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

        $information = InformatinPatient::findOrFail($id);
        $html = view('admin.information.edit-modal', compact('information'))->render();
        return response()->json(['message' => true, 'html' => $html, 'information' => $information]);
    }

    public function update(Request $request,$id)
    {
        $this->informationService->updateInformation($request, $id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $information = InformatinPatient::findOrFail($id);
        if($information->delete()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
