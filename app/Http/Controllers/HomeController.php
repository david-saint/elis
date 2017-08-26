<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Business;
use App\Message;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
         $states = ['FCT Abuja','Abia','Adamawa','Anambra','Akwa Ibom','Bauchi','Bayelsa','Benue','Borno','Cross River','Delta','Ebonyi','Edo','Enugu','Ekiti','Gombe','Imo','Jigawa','Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nassarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara'];
        return view('home', compact('states'));
    }

     public function ggg(Request $request)
    {
        $business = Business::create([
            'name' => 'Isdev',
            'category' => 'Product',
            'description' => 'I am an entrepreneur involved in selling reat ideas to people.',
            'city' => 'Iyana Ipaja',
            'state' => 'Lagos',
            'country' => 'Nigeeria',
            'user_id' => Auth::user()->id
       ]);
        session()->flash('message', 'Done'); 
        return redirect('/');
    }

    public function interaction()
    {
         $item = Input::get ( 'search' );
        return view('home', compact('states'));
    }

}
