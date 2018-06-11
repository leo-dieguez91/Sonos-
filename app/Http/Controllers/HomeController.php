<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
      return view('index');
    }

    public function registro(){
      $request=request();
      $request->validate([
          'name'=> 'required',
          'last_name'=> 'required',
          'email'=>'required|email',
          'password'=>'required|min:7'
      ]);

  
    }

    public function faq()
    {
      return view('faq');
    }
}
