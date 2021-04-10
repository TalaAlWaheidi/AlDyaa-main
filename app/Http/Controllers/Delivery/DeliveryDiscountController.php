<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Delivery\DeliveryDiscount\CreateDiscountRequest;
use App\Models\DeliveryDiscount;
use Illuminate\Http\Request;

class DeliveryDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $discounts = DeliveryDiscount::all();
        return view('delivery.deliveryDiscount.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('delivery.deliveryDiscount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscountRequest $request)
    {
        //
        DeliveryDiscount::create([
            'products_amount' => $request->amount,
            'discount_percentage' => $request->percentage
        ]);
        return redirect()->route('delivery.discounts.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryDiscount $discount)
    {
        //
        return view('delivery.deliveryDiscount.edit',compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDiscountRequest $request, DeliveryDiscount $discount)
    {
        $discount->update([
            'products_amount' => $request->amount,
            'discount_percentage' => $request->percentage
        ]);
        return redirect()->route('delivery.discounts.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryDiscount $discount)
    {
        $discount->delete();
        return redirect()->route('delivery.discounts.all');
    }
}
