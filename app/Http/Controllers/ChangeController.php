<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangeController extends Controller
{
    //

    public function show($id)
    {
        $data = User::find($id);
        return view('admin.changepassword');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|min:8|confirmed|different:current_password',
        ]);
        // $user = User::find($id);
        // if (Hash::check($request->input('currentpassword')) == Auth::user()->password && $request->input('password') == $request->input('password_confirmation')) {
        //     $user->password = Hash::make($request->input('password'));
        // }
        $user = Auth::user();

        $user->forceFill([
            'password' => Hash::make($request->input('password')),
        ])->save();
        session()->flash('success', 'The password is updated !');

        return redirect()->back();
    }
}