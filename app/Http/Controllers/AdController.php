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


    public function postAd(Request $request)
    {   
        // dd($request);
        $vehicle = new Vehicle();

        $vehicle->name = $request['name'];
        $vehicle->engine_cc = 100;
        $vehicle->color = $request['color'];
        $vehicle->model = 100;
        $vehicle->transmission = "auto";
        $vehicle->condition = 1;
        $vehicle->running = 5000;
        $vehicle->location = "Dhaka";
        $vehicle->price = $request['price'];
        $vehicle->description = "Hey";
        $vehicle->contact = "121212121";
        $vehicle->sale_status = 0;
        $vehicle->user_id = $request['user_id'];
        $vehicle->car_type = 1;
        
        $vehicle->save();

        return redirect('/post-ad')->with('status', 'Posted successfully');
    }

}
