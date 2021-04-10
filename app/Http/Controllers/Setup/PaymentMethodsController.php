<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setup\CreatePaymentRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = PaymentMethod::all();
        return view('setup.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePaymentRequest $request)
    {
        PaymentMethod::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => null,
            'active' => $request->active ?? 0,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
        ]);
        return redirect()->route('setups.payment.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $payment)
    {
        return view('setup.payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePaymentRequest $request, PaymentMethod $payment)
    {
        $payment->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => null,
            'active' => $request->active ?? 0,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
        ]);
        return redirect()->route('setups.payment.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $payment)
    {
        $payment->delete();
        return redirect()->route('setups.payment.all');
    }
}
