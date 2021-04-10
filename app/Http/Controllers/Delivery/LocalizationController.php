<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Delivery\Locality\CreateLocalityRequest;
use App\Models\City;
use App\Models\Locality;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localities = Locality::all();
        return view('delivery.locality.index', compact('localities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::all();
        return view('delivery.locality.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLocalityRequest $request)
    {
        //
        Locality::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'city_id' => $request->city,
            'delivery_price' => $request->delivery_price,
            'active' => $request->active ?? 0
        ]);
        return redirect()->route('delivery.localities.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Locality $locality)
    {
        //
        $cities = City::all();
        return view('delivery.locality.edit', compact('locality', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateLocalityRequest $request, Locality $locality)
    {
        //
        $locality->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'city_id' => $request->city,
            'delivery_price' => $request->delivery_price,
            'active' => $request->active ?? 0
        ]);
        return redirect()->route('delivery.localities.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locality $locality)
    {
        //
        $locality->delete();
        return redirect()->route('delivery.localities.all');
    }
}
