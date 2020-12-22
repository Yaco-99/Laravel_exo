<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::get();
        return view('restaurants/index', compact('restaurants'));
        /* dd($restaurants); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Restaurant::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipcode' => $request['zipcode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review']
        ]);

        $this->validate(request(),[
            'name' => 'required|min:2|max:50',
            'address' => 'required|min:2|max:50',
            'zipcode' => 'required|min:1|max:15',
            'town' => 'required|min:2|max:30',
            'country' => 'required|min:2|max:20',
            'description' => 'required|min:5|max:10',
            'review' => 'required|min:0|max:10'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('restaurants/show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        
        return view('restaurants/edit',compact('restaurant'));
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
        $this->validate(request(),[
            'name' => 'required|min:2|max:50',
            'address' => 'required|min:2|max:50',
            'zipcode' => 'required|min:1|max:15',
            'town' => 'required|min:2|max:30',
            'country' => 'required|min:2|max:20',
            'description' => 'required|min:5|max:10',
            'review' => 'required|min:0|max:10'
        ]);

        Restaurant::where('id', $id)->update([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipcode' => $request['zipcode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review']
        ]);
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
