<?php

namespace App\Http\Controllers;

use App\Models\Discovery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $discoveries=DB::table('discoveries')->get();
        return view('frontend.home', compact('discoveries'));
    }

    public function listing(){
        return view('frontend.listings.listings');
    }

    public function detailListing(){
        return view('frontend.listings.listing_loisir');
    }
    public function payment(){
        return view('frontend.payment');
    }

    public function businesshome(){
        return view('business.home');
    }

    public function pricing(){
        return view('business.pricing');
    }
    public function packone(){
        return view('business.create_account');
    }

    public function discoveries(){

        return view('frontend.discoveries.blog');
    }
    public function contact(){

        return view('frontend.contact');
    }
    public function packtwo(){

        return view('business.silver');
    }
    public function packthree(){

        return view('business.gold');
    }

    public function events(){

        return view('frontend.events.events');
    }

}
