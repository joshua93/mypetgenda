<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Support\Facades\Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        //$pets = Pet::all();
        //$pets = Pet::where('userId',2)->get();
        $pets = $user->pets;
        //dd($pets);
        return view('home', compact('pets'));
    }
}
