<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function index()
    {
        return view('admin.information');
    }

    public function create()
    {
        $data = information::find(1);
        return view('admin.createinformation', compact('data'));
    }

    public function store(Request $request)
    {
        $ff = [];
        $fff = [];
        $data = information::find(1);
        $data->phone_number1 = $request->input('phone1');
        $data->phone_number2 = $request->input('phone2');
        $data->email1 = $request->input('email1');
        $data->email2 = $request->input('email2');
        // $data->sliders = $request->input('sliders');

        if ($request->hasFile('sliders')) {
            foreach ($request->file('sliders') as $sliders) {
                $path = $sliders->store(
                    '',
                    ['disk' => 'public']
                );

                $fff[] = $path;
           }

            $data->sliders = $fff;

         }        $data->video = $request->input('video');
        // $data->photo = $request->input('photo');
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $path = $photo->store(
                    '',
                    ['disk' => 'public']
                );

                $ff[] = $path;
           }

            $data->photo = $ff;

         }
         $data->facebook = $request->input('facebook');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        $data->instagram = $request->input('instagram');
        $data->save();
        session()->flash('success', 'The information is updated !');
        return redirect()->back();
    }
}