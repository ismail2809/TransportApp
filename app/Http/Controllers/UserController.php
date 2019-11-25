<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile; 
use App\User;   
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{ 
    public function __construct()
    {
    	$this->middleware('auth');
    }  

    public function form_create()
    {
            return view('user.new');
    }  

    public function create(Request $request)
    {
        $user = new User();  
        $user->name = $request->input('name'); 
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));  
        $user->is_active = "1";  
        //dd($user);
        $user->save();
        
        return back(); 
 
    }

    public function index()
    {
        $users = User::all(); 
        return view('user.index',compact('users'));         
    }
 
     
}