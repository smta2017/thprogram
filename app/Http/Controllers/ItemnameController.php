<?php

namespace App\Http\Controllers;

use App\Itemname;
use Illuminate\Http\Request;

class ItemnameController extends Controller
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
        $test ='create';
       return view('ItemName.create',compact('test'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemname = Itemname::new();
        $itemname->sname = $request->sname;
        $itemname->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function show(Itemname $itemname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemname $itemname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemname $itemname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemname $itemname)
    {
        //
    }
}
