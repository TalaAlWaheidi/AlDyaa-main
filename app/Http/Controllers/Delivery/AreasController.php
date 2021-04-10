<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Delivery\Areas\CreateAreaRequest;
use App\Models\Area;
use App\Models\Locality;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $areas = Area::all();
        return view('delivery.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localities = Locality::all();
        return view('delivery.areas.create', compact('localities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAreaRequest $request)
    {
        //
        Area::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'locality_id' => $request->locality,
            'active' => $request->active ?? 0,
            'has_delivery_price' => $request->has_delivery_price,
            'delivery_price' => $request->delivery_price
        ]);
        return redirect()->route('delivery.areas.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
        $localities = Locality::all();
//        dd($area);
        return view('delivery.areas.edit', compact('area', 'localities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAreaRequest $request,Area $area)
    {
        //
        $area->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'locality_id' => $request->locality,
            'active' => $request->active ?? 0,
            'has_delivery_price' => $request->has_delivery_price,
            'delivery_price' => $request->delivery_price
        ]);
        return redirect()->route('delivery.areas.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        //
        $area->delete();
        return redirect()->route('delivery.areas.all');

    }
}
