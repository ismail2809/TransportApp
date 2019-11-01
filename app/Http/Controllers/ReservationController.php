<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Transport;
use App\User;
use Auth;
use Validator;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $reservations = Reservation::all();

        return view('reservation.index',compact('reservations'));
    }

    public function create()
    {
        $transports = Transport::all();
        return view('reservation.new',compact('transports'));
    }

    public function store(Request $request)
    {   
        $request->validate([
        'user_id' => 'required',
        'transport_id' => 'required',
        'trajet' => 'required',
        'nbr_place_disponible' => 'required|integer', 
        'date_voyage' => 'required',
        'prix' => 'required'
        ]);

        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->transport_id = $request->transport_id;
        //  dd($request->transport_id);
        $reservation->trajet = $request->trajet;
        $reservation->nbr_place_disponible = $request->nbr_place_disponible; 
        $reservation->date_voyage = $request->date_voyage;
        $reservation->prix = $request->prix;
        $reservation->description = $request->description;
        $reservation->save();
    }

    public function getReservation($id){

        $res = Reservation::find($id);
        $r =  Reservation::where('id', $id)->update(['nbr_place_reste' => ( $nbr_place_disponible - 1) ]);
        dd($r);
    }
}
