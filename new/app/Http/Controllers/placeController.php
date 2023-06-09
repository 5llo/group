<?php

namespace App\Http\Controllers;
use App\Models\Place;

use Illuminate\Http\Request;

class placeController extends Controller{

    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $place = Place::all();
    
        return view('place.index',  compact('place'));
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        
public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
    
    ]);

    // Create a new place from the validated data
    $place=Place::create($request->all());
    $place->save();

    // Redirect the user back to the index page with a success message
    return redirect('/place')->with('success', 'place created successfully.');
}
    

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {



        return view('place.show', ['places' => $place]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        return view('place.edit', ['places' => $place]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',

        ]);

        $place=Place::update($request->all());
        $place->save();

        return redirect('/place')->with('success', 'place updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {

        $task->delete();

        return redirect('/place')->with('success', 'place deleted successfully.');
    }
    
}