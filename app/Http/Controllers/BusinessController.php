<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Business;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    } 

    public function search()
    {
        $item = $request->search;
        
        $message = Message::create([
                'title' => 'Title',
                'message' => 'Isdev',
                'user_id' => 2
           ]);
        dd($item);
        $determiner = 'query';
        $item = Input::get ( 'search' );
        if($determiner == 'query') {
            //single search
            $results = Business::where('name', 'LIKE', '%'.$item.'%')->orWhere('description', 'LIKE', '%'.$item.'%')->orWhere('city', 'LIKE', '%'.$item.'%')->orWhere('state', 'LIKE', '%'.$item.'%')->orWhere('country', 'LIKE', '%'.$item.'%')->orderBy('id', 'desc')->simplePaginate(15);
            //single search
            if(count($results) > 0) {
                $k = 1;
                return view('search')->withDetails($results)->withQuery( $item );
            }
                else{ return view ('search')->withMessage('No results found. Please tell me something else!')->withQuery($item);
            }
        }elseif($determiner == 'greeting'){
       //     $options = array("one": "Neo", "two": "Morpheus", "three": "Trinity", "four": "Cypher","five": "Tank");
         //   $answer = array_rand($options);
            $answer = 'Hello';
               return view('search', compact('answer'));
        }elseif($determiner == 'conversation'){
            
        }

        $message = Message::create([
                    'title' => 'Title',
                    'message' => 'Isdev',
                    'user_id' => 'Product'
               ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
