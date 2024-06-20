<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\TreatmentDisease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        return view('admin.header_section.header', ['header' => Header::first()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'telegram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'site_about' => 'required',
            'instagram' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'menu_id' => 'required'
        ]);
        $logoPath = $request->file('logo')->store('public/logo'); // Assuming you store logos in 'public/header' folder
        $header = new Header;
        $header->telegram = $request->telegram;
        $header->facebook = $request->facebook;
        $header->twitter = $request->twitter;
        $header->instagram = $request->instagram;
        $header->site_about = $request->site_about;
        $header->menu_id = $request->menu_id;
        $header->logo = $logoPath;
        $header->save();
        return redirect()->route('header.index')
            ->with('success', 'Header information saved successfully!');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $header = Header::findOrFail($id);
        $html = view('admin.header_section.edit-modal', compact('header'))->render();
        return response()->json(['message' => true, 'html' => $html, 'header' => $header]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $header = Header::find($id);
        // Find the header record
        $request->validate([
            'telegram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'site_about' => 'required',
            'instagram' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'menu_id' => 'required'
        ]);
        if($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('/public/logo');
            $header->logo = $logoPath;
        }
        $header->telegram = $request->telegram;
        $header->facebook = $request->facebook;
        $header->twitter = $request->twitter;
        $header->instagram = $request->instagram;
        $header->site_about = $request->site_about;
        $header->menu_id = $request->menu_id;
        $header->save();
        return redirect()->route('header.index')
            ->with('success', 'Header information saved successfully!');
    }


    public function destroy(string $id)
    {
        //
    }
}
