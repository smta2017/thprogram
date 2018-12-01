<?php

namespace App\Http\Controllers;

use App\itemname;
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
        return view('ItemName.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function show(itemname $itemname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function edit(itemname $itemname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itemname $itemname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemname $itemname)
    {
        //
    }
}
