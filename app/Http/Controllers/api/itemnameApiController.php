<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\itemname;
use App\Http\Resources\Itemname as itemnameResource;

class itemnameApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemnames = itemname::paginate(9);
        return itemnameResource::collection($itemnames);
    }

    
    public function store(Request $request)
    {
        $itemname=$request->isMethod('put') ? itemname::findOrFail($request->id) : new itemname;
        $itemname->sname = $request->sname;
        if($itemname->save()){
               return new itemnameResource($itemname);
         }
   
    }

   
    public function show($id)
    {
       $itemname = itemname::findOrFail($id);
       return new itemnameResource($itemname);
    }
 
    public function update(Request $request, $id)
    {

        // return $request->sname . " update " . $id;
         $itemname = itemname::find($id);
         $itemname->sname = $request->sname;
        if ($itemname->save()) {
             return new itemnameResource($itemname);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemname = itemname::findOrFail($id);

       if($itemname->delete()){
        return new itemnameResource($itemname);
       }
    }
}
