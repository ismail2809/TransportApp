<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile; 
use App\User;  
use App\Voyage;

class ProfileController extends Controller
{ 
    public function __construct()
    {
    	$this->middleware('auth');
    }  

    public function index()
    {
        $user = Auth::user();           
        $historiques = Voyage::where('user_id',$user->id)->with('users','reservations')->get(); 
        //dd($historiques);exit();
             return view('profile.index',compact('user','historiques')); 
        
    }

    public function edit($id)
    { 
        $user = User::find($id);
        //dd($user);
            return view('profile.edit',compact('user'));
        
    }      

     public function update(Request $request,$id)
     { 
        $user = User::find($id); 
        //dd($user);exit();
        $user->name = $request->input('name'); 
        $user->email = $request->input('email');
        $user->tel = $request->input('tel'); 
        $user->dateNaissance = $request->input('dateNaissance');
        $user->description = $request->input('description');
        //dd($user);
        $user->save();

         return back()->with('warning','les informations est modifié !');
    }     
     
}