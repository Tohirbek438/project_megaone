<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ChangePasswordController extends Controller
{
    public function ChangeEdit($id)
    {
        return view('admin.admin.admin-password', ['user' => User::find($id)]);
    }

    public function updatePassword(Request $request,$id)
    {
        $user = User::find($id);
        $request->validate([
            'password' => 'required|confirmed|min:8',
            'image' => 'required|nullable|image|max:2048',
        ]);
        $image = $request->file('image');
        $image_path = $image->store('public/user');
        $user->image = $image_path;
        $user->name = Auth::user()->name;
        $user->phone = Auth::user()->phone;
        $user->email = Auth::user()->email;
        $user->date = Auth::user()->date;
        $user->address = Auth::user()->address;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.index');
    }
}

