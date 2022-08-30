<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\information;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = Food::all();
        $data2 = Foodchef::all();
        $data22 = information::all();


        $data3 = Food::where('type', 'breckfast')->get();
        $data4 = information::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view('home', compact('data', 'data2', 'data3', 'data22', 'data4', 'count'));
    }

    public function redirects()
    {
        $data = Food::all();
        $data22 = information::all();

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return view('admin.adminhome', compact('data22', 'data'));
        } else {
            $user_id = Auth::id();
            $count = Cart::where('user_id', $user_id)->count();
            return view('home', [
                'data' => $data,
                'count' => $count,
            ]);
        }
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->input('quantity');
            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = Cart::where('user_id', $id)->count();
        $data2 = Cart::select('*')->where('user_id', '=', $id)->get();
        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        return view('showcart', compact('count', 'data', 'data2'));
    }

    public function destroy($id)
    {

        $data = Cart::find($id);
        if ($data != null) {
            $data->delete();
        }

        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {

        foreach($request->foodname as $key => $foodname) {
            $data = new Order();

            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity  = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }
        return redirect()->back();
    }
}