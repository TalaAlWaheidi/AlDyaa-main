<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\DeliveryLine;
use App\Models\Line;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index($id,Request $request)
    {
        $line = DeliveryLine::find($id);
//        dd($line);
            $lines=Line::where('delivery_line_id','=',$id)->get();
//            $lineid=DB::table('lines')->get('delivery_line_id',$lines);
//            $lineid=Line::where('delivery_line_id', $request->selector)->get();
//            dd($lines);
        return view('delivery.delivaryline.view', compact('line','lines'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Line::create([
            'name' => $request->name,
            'delivery_line_id' => $request->selector,
            // 'cost' => $request->cost,
        ]);
        // DB::table('lines')->insert($line);
        // $request->session()->flash('message', "Data has been insert successful!.");
        // return Redirect::back();

        return redirect()->route('line.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $id)
    {
        $id->delete();
        return response()->json(['state' => 'deleted']);
    }
}
