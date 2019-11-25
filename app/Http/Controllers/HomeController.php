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
        $users = User::count();
        $reservations = Reservation::count();  
        $reservation_prix = Reservation::sum('prix');  
        $transports = Transport::count();
        $voyages = Voyage::count();  
        $all_reservations = Voyage::with('users','reservations')->get();
        
        return view('dashboard',compact('users','reservations','transports','voyages','reservation_prix','all_reservations'));
    }
}
