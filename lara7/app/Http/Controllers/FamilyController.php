<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\place;
use App\Models\Plant;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families=family::all();
        $places=place::all();
        $plants=Plant::all();
        return view('family.show',compact('families','places','plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places=place::all();
        $plants=Plant::all();
        return View('family.add',compact('places','plants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{// {     dd($request);
        $fam=family::create($request->all());
         //dd($fam);
//        $fam->plants()->attach($request['plant_id']);
        return redirect('family');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, family $family)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(family $family)
    {
        //
    }
}
