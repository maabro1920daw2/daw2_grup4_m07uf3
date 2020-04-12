<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grid;
use App\Show;
use App\Channel;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::all();
        $grids = Grid::all();
        $shows = Show::all();
        return view('grid.index', compact('channels','grids','shows'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sh = \DB::table('shows')->select('id','showName','showChannel')->get();
        $cn = \DB::table('channels')->select('id','channelName')->get();
        return view('grid.createGrid', compact('sh','cn'));
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
            'gridHour' => 'required',
            'gridDay' => 'required',
            'gridChannel' => 'required',
            'gridShow' => 'required',
        ]);
        $newgrid = new Grid([
            'gridHour' => $request->get('gridHour'),
            'gridDay' => $request->get('gridDay'),
            'gridChannel' => $request->get('gridChannel'),
            'gridShow' => $request->get('gridShow'),
        ]);
       
        $newgrid->save();
        $newgrid->shows()->attach($request->get('gridShow'));
        return redirect()->route('grid.create')->with('Exit', 'New grid created');
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
