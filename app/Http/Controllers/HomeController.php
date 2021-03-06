<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ad;
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
        
        $email = Auth::user()->email;
        error_log($email);
        return view('home');
    }

    public function admin(Request $req){
        return view('middleware')->withMessage("Admin");
    }

    public function buyer(Request $req){
        return view('middleware')->withMessage("Buyer");
    }

    public function seller(Request $req){
        return view('middleware')->withMessage("Seller");
    }

    

    
}
