<?php

namespace App\Http\Controllers;

use App\Models\AppointmentForm;
use Illuminate\Http\Request;

class FormForAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.form.form', ['form' => AppointmentForm::first()]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string',
            'email_uz' => 'required|string',
            'message_uz' => 'required|string',
            'date_uz' => 'required|string',
            'menu_id' => 'required'
        ]);
        $form = new AppointmentForm();
        $form->name_uz = $request->name_uz;
        $form->name_ru = $request->name_ru;
        $form->name_en = $request->name_en;
        $form->email_uz = $request->email_uz;
        $form->email_ru = $request->email_ru;
        $form->email_en = $request->email_en;
        $form->date_uz = $request->date_uz;
        $form->date_ru = $request->date_ru;
        $form->date_en = $request->date_en;

        $form->message_uz = $request->message_uz;
        $form->message_ru = $request->message_ru;
        $form->message_en = $request->message_en;

        $form->menu_id = $request->menu_id;
        $form->save();
        return redirect()->route('form.index')->with('success', 'Saqlandi!');
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
        $form = AppointmentForm::findOrFail($id);
        if(isset($form)) {
            return view('admin.form.edit-modal', ['form' => $form]);
        }
        else{
            return view('error.404');
        }
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name_uz' => 'required|string',
            'email_uz' => 'required|string',
            'message_uz' => 'required|string',
            'date_uz' => 'required|string',
            'menu_id' => 'required'
        ]);
        $form = AppointmentForm::find($id);
        $form->name_uz = $request->name_uz;
        $form->name_ru = $request->name_ru;
        $form->name_en = $request->name_en;
        $form->email_uz = $request->email_uz;
        $form->email_ru = $request->email_ru;
        $form->email_en = $request->email_en;
        $form->date_uz = $request->date_uz;
        $form->date_ru = $request->date_ru;
        $form->date_en = $request->date_en;
        $form->message_uz = $request->message_uz;
        $form->message_ru = $request->message_ru;
        $form->message_en = $request->message_en;

        $form->menu_id = $request->menu_id;
        $form->save();
        return redirect()->route('form.index')->with('success', 'Tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
