<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\City;
use COM;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $areas = Area::all();
        $areas = Area::all();
        // $city = City::findorfail('id')->areas;
        // $city = $areas->first()->areas;
        // dd($city);
        // $city->Cities->name;
        return view('delivery.area.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::all();
        return view('delivery.area.create', compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Area::create([
            'name' => $request->name,
            'city_id' => $request->selector,
            'cost' => $request->cost,
        ]);
        // Area::create($request->all());
        return redirect()->route('area.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // // $areas = Area::all();
        // $areas = Area::all();
        // // $city = City::find($id)->areas;
        // // $city = $areas->first()->areas;
        // // dd($city);
        // // $city->Cities->name;
        // return view('delivery.area.index', compact('areas', 'city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        $city = City::all();
        $area = Area::find($area->id);
        // dd($area);
        // $city = City::find($area->id)->areas;
        return view('delivery.area.edit', compact('area', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->update([
            'name' => $request->name,
            'city_id' => $request->selector,
            'cost' => $request->cost,
        ]);
        return redirect()->route('area.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $id)
    {
        $id->delete();
        return response()->json(['state' => 'deleted']);
    }
}
