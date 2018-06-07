<?php

namespace App\Http\Controllers;
use App\Vehicle;

use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post-ad');
    }


    public function myAds()
    {
        return view('myads');
    }


    public function details($id)
    {   
        $single = Vehicle::where('id', $id)->first();

        return view('details');
    }

    public function postAd(Request $request)
    {   
        // dd($request);
        $vehicle = new Vehicle();

        $vehicle->name = $request['name'];
        $vehicle->engine_cc = $request['engine_cc'];
        $vehicle->color = $request['color'];
        $vehicle->model = $request['model'];
        $vehicle->transmission = $request['transmission'];
        $vehicle->condition = $request['condition'];
        $vehicle->running = $request['running'];
        $vehicle->location = $request['location'];
        $vehicle->price = $request['price'];
        $vehicle->description = $request['desc'];
        $vehicle->contact = $request['contact'];
        $vehicle->sale_status = 0;
        $vehicle->user_id = $request['user_id'];
        $vehicle->car_type = $request['type'];
        
        $vehicle->save();

        return redirect('/post-ad')->with('status', 'Posted successfully');
    }

}
