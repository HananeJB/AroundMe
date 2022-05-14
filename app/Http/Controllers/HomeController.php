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
 /*   public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function listings(){
        return view('frontend.listings.listings');
    }

    public function detailListing(){
        return view('frontend.listings.listing_loisir');
    }
    public function payment(){
        return view('frontend.payment');
    }
}
