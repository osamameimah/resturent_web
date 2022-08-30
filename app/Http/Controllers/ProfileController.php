<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show($id)
    {
        $data = User::find($id);
        return view('admin.adminprofile', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('firstname') . " " . $request->input('lastname');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store(
                  '',
                ['disk' => 'public']);
            $data->image = $path;
            
        }
        $data->save();
        session()->flash('success', 'The profile is updated !');

        return redirect()->back();
    }
}