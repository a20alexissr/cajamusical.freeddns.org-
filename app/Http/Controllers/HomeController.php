<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\User;



use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $room = Room::get();



        return view('home', ['Room'=> $room]);
    }

}
