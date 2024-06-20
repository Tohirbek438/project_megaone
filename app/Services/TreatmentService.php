<?php

namespace App\Services;

use App\Models\TreatmentDisease;
use Illuminate\Http\Request;

class TreatmentService
{
    public function treatmentStore(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_eng' => 'required|string|max:255',
            'percent' => 'required|numeric|min:0|max:100',
            'menu_id' => 'required'
        ]);

        $treatment = TreatmentDisease::create([
            'title_uz' => $request->input('title_uz'),
            'title_ru' => $request->input('title_ru'),
            'title_eng' => $request->input('title_eng'),
            'percent' => $request->input('percent'),
            'menu_id' => $request->input('menu_id')
        ]);
        return $treatment;
    }

    public function treatmentUpdate(Request $request,$id)
    {
        $treatment = TreatmentDisease::find($id);
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_eng' => 'required|string|max:255',
            'percent' => 'required|numeric|min:0|max:100',
        ]);

        $treatment->title_uz = $request->input('title_uz');
        $treatment->title_ru = $request->input('title_ru');
        $treatment->title_eng = $request->input('title_eng');
        $treatment->percent = $request->input('percent');
        $treatment->save();
        return $treatment;
    }

}
