<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use App\Channel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('channels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('channels.create');
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
            'channel' => 'required'
        ]);

        Channel::create([
            'name' => $request->channel,
            'slug' => str_slug(" $request->channel")
        ]);

        // Session::getflashBag('success', 'Channel Created');

        return redirect()->route('channels.index')->with('success', 'Channel created');
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


        return view('channels.edit')->with('channel', Channel::find($id));
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
        $channel = Channel::find($id);

        $channel->name = $request->channel;
        $channel->slug = str_slug("$id $channel->title");
        $channel->save();

        return redirect()->route('channels.index')->with('success', 'Channel update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Channel::destroy($id);
        return redirect()->route('channels.index')->with('error', 'Channel Deleted');
    }
}