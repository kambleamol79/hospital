<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function patient(Request $request)
    {
		
		$request->user()->authorizeRoles(['patient']);
		
        return view('home');
    }
	
	public function doctor(Request $request)
    {
		
		$request->user()->authorizeRoles(['doctor']);
		
        return view('doctor');
    }
}
