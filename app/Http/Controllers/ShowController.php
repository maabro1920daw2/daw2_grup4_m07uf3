<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cn = \DB::table('channels')->select('channelId','channelName')->get();
        return view('show.createShow', compact('cn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'showId' => 'required',
            'showName' => 'required',
            'showDesc' => 'required',
            'showTip' => 'required',
            'showClas' => 'required',
            'showChannel' => 'required',
        ]);
        $newgrid = new Show([
            //'showId' => $request->get('showId'),
            'showName' => $request->get('showName'),
            'showDesc' => $request->get('showDesc'),
            'showTip' => $request->get('showTip'),
            'showClas' => $request->get('showClas'),
            'showChannel' => $request->get('showChannel'),
        ]);
        $newgrid->save();
        return redirect()->route('show.create')->with('Exit', 'New show created');
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
    public function destroy($id)
    {
        //
    }
}
