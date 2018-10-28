<?php

namespace App\Http\Controllers;

use App\Itemname;
use Illuminate\Http\Request;
use App\Http\Requests\ItemNameValidate;

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
    //     $test ='create';
    //    return view('ItemName.create',compact('test'));

    echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ItemNameValidate $validate)
    {
        // $itemname = new Itemname();
        // $itemname->sname = $request->sname;
        // $itemname->save();
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function show(Itemname $itemname)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Itemname $itemname)
    {
        // $itemname =  Itemname::find($request->id);
        // return view('ItemName.edit',compact('itemname'));
        echo "edit";
       
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
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemname $itemname)
    {
        echo "destroy";
    }
}
