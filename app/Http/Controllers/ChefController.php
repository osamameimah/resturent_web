<?php

namespace App\Http\Controllers;

use App\Models\Foodchef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    //

    public function index()
    {
        $data = Foodchef::all();
        return view('admin.adminchef', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'speciality' => 'nullable',
            'image' => 'required|image',
        ]);
        $data = new Foodchef();
        $data->name = $request->input('name');
        $data->speciality = $request->input('speciality');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store(
                '',
                ['disk' => 'public']
            );
            $data->image = $path;
        }
        $data->save();
        session()->flash('success', 'the chef is created !');

        return redirect()->route('viewchef');
    }

    public function show()
    {
        // $data = Foodchef::all();

        return view('admin.showchef');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'speciality' => 'nullable',
            'image' => 'required|image',
        ]);
        $data = Foodchef::find($id);
        $data->name = $request->input('name');
        $data->speciality = $request->input('speciality');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store(
                '',
                ['disk' => 'public']
            );
            $data->image = $path;
        }
        $data->save();
        session()->flash('success', 'the chef is updated !');

        return redirect()->route('viewchef');
    }

    public function edit(Request $request, $id)
    {
        $data = Foodchef::find($id);
        return view('admin.updatechef', compact('data'));
    }

    public function destroy($id)
    {
        $data = Foodchef::find($id);
        $data->delete();
        session()->flash('success', 'the chef is deleted !');

        return redirect()->back();
    }
}