<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Transport;
use App\Voyage;
use App\User;
use Auth;
use Carbon\Carbon;


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
    public function index()
    {
        $users = User::all();
        $reservations = Reservation::all();  
        $transports = Transport::all();
        $voyages = Voyage::all();
        $date = Carbon::now()->month;
        $reservations = Reservation::where('date_voyage','=',$date)->get();
        //dd($reservations);

        return view('dashboard',compact('users','reservations','transports','voyages'));
    }
}
