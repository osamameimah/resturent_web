<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //

    public function index()
    {
        $data = Food::all();
        return view('admin.foodmenu', compact('data'));
    }


    public function create()
    {
        $data = Food::all();
         return view('admin.view',compact('data'));
    }
    
    public function store(Request $request)
    {
        // $request->validate([
        //    'title'=>'required|min:5|max:300',
        //    'price' =>'required|numeric',
        //    'image' =>'required|image',
        //    'description' =>'nullable|min:50',
        //    'type'=>'required'
            
        // ]);
        $food = new Food();
        $food->title = $request->input('title');
        $food->price = $request->input('price');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store(
                '',
                ['disk' => 'public']
            );
            $food->image = $path;
        }
        $food->description = $request->input('description');
        $food->type = $request->input('type');
        $food->save();
        session()->flash('success', 'the food is created !');

        return redirect()->route('foodmenu');
    }




    public function edit($id)
    {
        $data = Food::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:300',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'nullable|min:50',
            'type' => 'required'

        ]);
        $data = Food::find($id);
        $data->title = $request->input('title');
        $data->price = $request->input('price');
        if (!$request->hasFile('image')) {
            $data->image = $request->input('image');
        } else {
            $data->image = $request->input('image');
        }
        $data->description = $request->input('description');
        session()->flash('success', 'the chef is updated !');

        $data->save();


        return redirect()->route('foodmenu');
    }



    public function destroy($id)
    {
        $data = Food::findOrFail($id);
        $data->delete();
        session()->flash('success', 'the chef is deleted !');

        return redirect()->back()->with('success', 'The food is success deleted !');
    }
    
     public function details($id){
        $datah = Food::find($id);
        return view('details',compact('datah'));
    }
     
}