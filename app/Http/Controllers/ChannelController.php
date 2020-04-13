<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::all()->toArray();
        return view('channel.index', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('channel.createChannel');
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
            'channelName' => 'required',
            'channelLogo' =>  'required',
        ]);

        $image = $request->file('channelLogo');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $new_name);

        $newgrid = new Channel([
            'channelName' => $request->get('channelName'),
            'channelLogo' => $new_name,
        ]);
        $newgrid->save();
        return redirect()->route('channel.index')->with('Exit', 'New channel created');
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
        $channel = Channel::find($id);
        return view('channel.edit', compact('channel', 'id'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('channelLogo');
        if($image != '')
        {
            $request->validate([
                'channelName'    =>  'required',
                'channelLogo'    =>  'image'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $image_name);
        }
        else
        {
            $request->validate([
                'channelName'    =>  'required',
            ]);
        }

        $channel = Channel::find($id);
        $channel->channelName = $request->get('channelName');
        $channel->channelLogo = $image_name;
        $channel->save();
        return redirect()->route('channel.index')->with('Exit', 'Data channel updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channel::find($id);
        $channel->delete();
        return redirect()->route('channel.index')->with('Exit', 'Channel deleted');
    }
}
