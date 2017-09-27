<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
    public function index(Request $request) {
//        $request->session()->put(['jesus' => 'student']);
//
//        return $request->session()->get('jesus');
//        session(['jesus' => 'a student']);
//        echo session('jesus');

//        session(['jesus2' => 'the same student']);
//        return session('jesus2');

//        $request->session()->forget('jesus2');

//        $request->session()->flush();
//          return $request->session()->all();


//        $request->session()->flash('message', 'post has been created');
        return $request->session()->get('message');

//        return view('home');
    }
}
