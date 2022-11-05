<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBikeRequest;
use App\Models\Bike;
use Illuminate\Support\Str;

class BikeController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Bike::class, 'bike');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::paginate(6);

        return view('bikes.index', compact('bikes'));
    }

    /**
     * Display a listing of the resource available.
     *
     * @return \Illuminate\Http\Response
     */
    public function available()
    {
        $bikes = Bike::available()->paginate(6);

        return view('bikes.index', compact('bikes'));
    }

    /**
     * Display a listing of the resource busy.
     *
     * @return \Illuminate\Http\Response
     */
    public function busy()
    {
        $bikes = Bike::busy()->paginate(6);

        return view('bikes.index', compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bike = new Bike;

        return view('bikes.create', compact('bike'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveBikeRequest $request)
    {
        Bike::create([
            'reference' => $request->input('reference'),
            'slug' => Str::slug($request->input('reference'), '-'),
            'serial_number' => $request->input('serial_number'),
        ]);

        return redirect()->route('bikes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        return view('bikes.edit', compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(SaveBikeRequest $request, Bike $bike)
    {
        $bike->update([
            'reference' => $request->input('reference'),
            'slug' => Str::slug($request->input('reference'), '-'),
            'serial_number' => $request->input('serial_number'),
        ]);

        return redirect()->route('bikes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        $bike->delete();

        return redirect()->route('bikes.index');
    }
}
