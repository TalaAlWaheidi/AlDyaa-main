<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMan;
use Illuminate\Http\Request;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryMan = DeliveryMan::all();
        // return view('delivaryMan.create');
        return view('delivery.delivaryMan.index', compact('deliveryMan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery.delivaryMan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DeliveryMan::create($request->all());
        return redirect()->route('delivaryman.all');
        // return redirect('/delivaryman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMan $deliveryMan)
    {
        return view('delivery.delivaryMan.edit', compact('deliveryMan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryMan $deliveryMan)
    {
        // $deliveryMan = DeliveryMan::find($deliveryMan->id);
        // $deliveryMan->name = $request->name;
        // $deliveryMan->phone = $request->phone;
        // $deliveryMan->address = $request->address;
        // $deliveryMan->carnum = $request->carnum;
        // $deliveryMan->save();
        // return redirect('/delivarymann');

        $deliveryMan->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'carnum' => $request->carnum,
        ]);

        // $area->update([
        //     'name_ar' => $request->name_ar,
        //     'name_en' => $request->name_en,
        //     'locality_id' => $request->locality,
        //     'active' => $request->active ?? 0,
        //     'has_delivery_price' => $request->has_delivery_price,
        //     'delivery_price' => $request->delivery_price
        // ]);

        return redirect()->route('delivaryman.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMan $id)
    {
        $id->delete();
        return redirect()->route('delivaryman.all');
    }
}
