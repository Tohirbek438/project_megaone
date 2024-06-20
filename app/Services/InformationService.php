<?php

namespace App\Services;

use App\Models\InformatinPatient;
use App\Models\TreatmentDisease;
use Illuminate\Http\Request;

class InformationService
{
    public function createInformation(Request $request)
    {
        $request->validate([
            'patients' => 'required|numeric|min:0',
            'doctors' => 'required|numeric|min:0',
            'cases' => 'required|numeric|min:0',
            'appointments' => 'required|numeric|min:0',
        ]);

        $information = InformatinPatient::create([
            'patients' => $request->input('patients'),
            'doctors' => $request->input('doctors'),
            'cases' => $request->input('cases'),
            'appointments' => $request->input('appointments'),
        ]);
        return $information;
    }

    public function updateInformation(Request $request, $id)
    {
        $request->validate([
            'patients' => 'required|numeric',
            'doctors' => 'required|numeric',
            'cases' => 'required|numeric',
            'appointments' => 'required|numeric|min:0',
        ]);

        $information = InformatinPatient::find($id);
        $information->patients = $request->input('patients');
        $information->doctors = $request->input('doctors');
        $information->cases = $request->input('cases');
        $information->appointments = $request->input('appointments');
        $information->save();

        return $information;
    }


}
