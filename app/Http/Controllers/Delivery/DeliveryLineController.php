<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\DeliveryLine;
use Illuminate\Http\Request;

class DeliveryLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivaryline = DeliveryLine::all();
        return view('delivery.delivaryline.index', compact('delivaryline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery.delivaryline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DeliveryLine::create($request->all());
        return redirect()->route('delivaryline.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliveryline = DeliveryLine::find($id);
        // $dels = DeliveryLine::all();
        // dd($deliveryline);
        // $areas = Area::all();
        return view('delivery.delivaryline.edit', compact('deliveryline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1(DeliveryLine $deliveryline)
    {
        // $delivery = DeliveryLine::find($deliveryline->id);
        // dd($delivery);
        // $areas = Area::all();
        // return view('delivery.delivaryline.edit', compact('areas', 'delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryLine $delivaryline)
    {
        // $delivaryline->update([
        //     'line' => $request->line,
        //     'areaone' => $request->areaone,
        //     'areatwo' => $request->areatwo,
        //     'areathree' => $request->areathree,
        // ]);
        // return redirect()->route('delivaryline.all');

        $delivaryline->update($request->all());
        return redirect()->route('delivaryline.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryLine $id)
    {
        $id->delete();
        return response()->json(['state' => 'deleted']);
    }
}
