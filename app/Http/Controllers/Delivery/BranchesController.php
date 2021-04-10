<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Delivery\Branches\CreateBranchRequest;
use App\Models\Branch;
use App\Models\City;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branches = Branch::all();
        return view('delivery.branches.index', compact('branches'));
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
        return view('delivery.branches.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBranchRequest $request)
    {
        //
        Branch::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'city_id' => $request->city,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'active'=> $request->active ?? 0
        ]);
        return redirect()->route('delivery.branches.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
        $cities = City::all();
        return view('delivery.branches.edit', compact('cities', 'branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $branch->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'city_id' => $request->city,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'active'=> $request->active ?? 0
        ]);
        return redirect()->route('delivery.branches.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('delivery.branches.all');
    }
}
