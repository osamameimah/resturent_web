<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use App\Models\information;
use App\Models\Revervation;
use App\Models\User;
use App\Notifications\NewReservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function user()
    {
        $data = User::all();
        return view('admin.users', ['data' => $data]);
    }

    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        session()->flash('success','the user is deleted !');
        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data = new Revervation();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->guest = $request->input('guest');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->message = $request->input('message');
        $data->save();
$user = Auth::user();
         $user->notify( new NewReservation);
        return redirect()->back();
    }

    public function viewreservation()
    {
        // $data = Revervation::where('created_at', Carbon::now())->get();
        $data = Revervation::all();
        $data2 = information::all(); 
        return view('admin.adminreservation', compact('data','data2'));
    }

    
    // public function foodmenu()
    // {
    //     $data = Food::all();
    //     return view('admin.foodmenu', compact('data'));
    // }

    // public function uploadfood(Request $request)
    // {
    //     $food = new Food();
    //     $food->title = $request->input('title');
    //     $food->price = $request->input('price');
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store(
    //             '',
    //             ['disk' => 'public']
    //         );
    //         $food->image = $path;
    //     }
    //     $food->description = $request->input('description');
    //     $food->save();
    //     return redirect()->route('foodmenu');
    // }

    // public function deletefood($id)
    // {
    //     $data = Food::findOrFail($id);
    //     $data->delete();
    //     return redirect()->back()->with('success', 'The food is success deleted !');
    // }


    // public function updateview($id)
    // {
    //     $data = Food::find($id);
    //     return view('admin.updateview', compact('data'));
    // }

    // public function updatevieww(Request $request, $id)
    // {
    //     $data = Food::find($id);
    //     $data->title = $request->input('title');
    //     $data->price = $request->input('price');
    //     if (!$request->hasFile('image')) {
    //         $data->image = $request->input('image');
    //     } else {
    //         $data->image = $request->input('image');
    //     }
    //     $data->description = $request->input('description');
    //     $data->save();


    //     return redirect()->route('foodmenu');
    // }

    // public function show()
    // {
    //     return view('admin.view');
    // }

  

    // public function viewchef()
    // {
    //     $data = Foodchef::all();
    //     return view('admin.adminchef', compact('data'));
    // }

    // public function uploadchef(Request $request)
    // {

    //     $data = new Foodchef;
    //     $data->name = $request->input('name');
    //     $data->speciality = $request->input('speciality');
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store(
    //             '',
    //             ['disk' => 'public']
    //         );
    //         $data->image = $path;
    //     }
    //     $data->save();
    //     return redirect()->back();
    // }

    // public function showchef()
    // {
        
    //     return view('admin.showchef');
    // }


// public function updattechef(Request $request ,$id){
//         $data = Foodchef::find($id);
//         $data->name = $request->input('name');
//         $data->speciality = $request->input('speciality');
//         $data->image = $request->input('image');
//         $data->save();
//         return redirect()->back();
    
// }
    
//     public function updatechef(Request $request, $id)
//     {
//         $data = Foodchef::find($id);
// return view('admin.updatechef',compact('data'));
//     }

//     public function deletechef($id)
//     {
//         $data = Foodchef::find($id);
//         $data->delete();
//         return redirect()->back();
//     }
}