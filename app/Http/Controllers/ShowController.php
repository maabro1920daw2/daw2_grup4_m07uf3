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
        $shows = Show::all()->toArray();
        return view('show.index', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cn = \DB::table('channels')->select('id','channelName')->get();
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
            'showName' => 'required',
            'showDesc' => 'required',
            'showTip' => 'required',
            'showClas' => 'required',
            'showChannel' => 'required'
        ]);
        $newgrid = new Show([
            'showName' => $request->get('showName'),
            'showDesc' => $request->get('showDesc'),
            'showTip' => $request->get('showTip'),
            'showClas' => $request->get('showClas'),
            'showChannel' => $request->get('showChannel'),
        ]);
        $newgrid->save();
        return redirect()->route('show.index')->with('Exit', 'New show created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Show::find($id);
        $cn = \DB::table('channels')->select('id','channelName')->get();
        return view('show.edit', compact('show', 'id', 'cn'));
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
        $this->validate($request, [
            'showName' => 'required',
            'showDesc' => 'required',
            'showTip' => 'required',
            'showClas' => 'required',
            'showChannel' => 'required'
        ]);
        $show = Show::find($id);
        $show->showName = $request->get('showName');
        $show->showDesc = $request->get('showDesc');
        $show->showTip = $request->get('showTip');
        $show->showClas = $request->get('showClas');
        $show->showChannel = $request->get('showChannel');
        $show->save();
        return redirect()->route('show.index')->with('Exit', 'Data show updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::find($id);
        $show->delete();
        return redirect()->route('show.index')->with('Exit', 'Show deleted');
    }
}
