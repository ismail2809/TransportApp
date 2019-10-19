<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Transport;
use App\Voyage;
use Auth;
use Validator;

class VoyageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(){
        $reservations = Reservation::all();
        
        return view('reservation.index',compact('reservations'));
     }

     public function show($id){
        $reservation = Reservation::find($id);
        $voyages = Voyage::where('reservation_id',$id)->sum('nbr_personnes');
        //dd($voyages);
        return view('reservation.detail',compact('reservation','voyages'));        
     }

    public function store(Request $request){
        
        $voyages = Voyage::where('reservation_id' ,$request->reservation_id)->count('nbr_personnes');
        //dd($voyages);
        $reste = ( $request->place_reste ) - $voyages;
               
        $voyage = new Voyage();
        $voyage->user_id =$request->user_id;
        $voyage->reservation_id =$request->reservation_id;
        //$voyage->place_reste = $reste;
        $voyage->nbr_personnes = $request->nbr_personnes;
        $voyage->save();
        //dd($voyages);  

        return view('layout/partials/message_success');      
    }
}
