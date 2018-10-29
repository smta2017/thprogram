<?php

namespace App\Http\Controllers;

use App\Itemname;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ItemNameValidate;
use App\Http\Resources\Itemname as ItemnameResources;

class ItemnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemnames=Itemname::paginate(3);
        return ItemnameResources::collection($itemnames);
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

    return "create";
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
        return "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemname=Itemname::findOrFail($id);
        return new ItemnameResources($itemname);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemname $itemname)
    {
        // $itemname =  Itemname::find($request->id);
        // return view('ItemName.edit',compact('itemname'));
        return "edit_" . $itemname;
       
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
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemname  $itemname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemname $itemname)
    {
        return "destroy_" .$itemname;
    }
}
