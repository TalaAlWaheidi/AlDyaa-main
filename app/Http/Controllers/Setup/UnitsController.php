<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setup\CreateUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $units = Unit::all();
        return view('setup.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('setup.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUnitRequest $request)
    {
        //
        Unit::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'rate' => $request->rate,
            'image' => null,
            'active'=>$request->active ?? 0
        ]);
        return redirect()->route('setups.units.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('setup.units.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUnitRequest $request, Unit $unit)
    {
        $unit->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'rate' => $request->rate,
            'image' => null,
            'active'=>$request->active ?? 0
        ]);
        return redirect()->route('setups.units.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('setups.units.all');
    }
}
