<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index', ['contact' => About::first()]);
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
        // Validate the incoming request data
        $request->validate([
            'telegram' => 'required|string',
            'office_phone' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'inquires' => 'required|string',
            'map_x' => 'required|string', // Assuming 'map_x' is the correct field name for map data
            'work_days' => 'required|string',
            'menu_id' => 'required|integer',
            'address' => 'required|string|min:6'
        ]);

        // Create a new Contact instance
        $contact = new About;

        // Assign the validated data to the Contact instance
        $contact->telegram = $request->input('telegram');
        $contact->office_phone = $request->input('office_phone');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->inquires = $request->input('inquires');
        $contact->map_x = $request->input('map_x');
        $contact->work_days = $request->input('work_days');
        $contact->menu_id = $request->input('menu_id');
        $contact->address = $request->input('address');

        // Save the Contact to the database
        $contact->save();

        // Redirect back to the contact form or another desired route
        return redirect()->route('contact.index')->with('success', 'Contact information saved successfully.');
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
        $header = About::findOrFail($id);
        $html = view('admin.contact.edit-modal', compact('header'))->render();
        return response()->json(['message' => true, 'html' => $html, 'header' => $header]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $contact = About::find($id);
        if (!$contact) {
            // Handle the case where the contact record is not found
            return redirect()->route('contact.index')->with('error', 'Contact record not found.');
        }

        $request->validate([
            'telegram' => 'required|string',
            'office_phone' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'inquires' => 'required|string',
            'map_x' => 'required|string',
            'work_days' => 'required|string',
            // Assuming you have a 'menu_id' field in your About model
            'menu_id' => 'required|integer|exists:menuses,id',
            'address' => 'required|string|min:6'
        ]);

        // Update the contact record with the validated data
        $contact->telegram = $request->input('telegram');
        $contact->office_phone = $request->input('office_phone');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->inquires = $request->input('inquires');
        $contact->map_x = $request->input('map_x');
        $contact->work_days = $request->input('work_days');
        $contact->menu_id = $request->input('menu_id');
        $contact->address = $request->input('address');

        // Save the updated contact record to the database
        $contact->save();

        // Redirect back to the contact index or another desired route
        return redirect()->route('contact.index')->with('success', 'Contact information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
