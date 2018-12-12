<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\store;
use App\Http\Resources\Store as StoreResource;

class storeApiController extends Controller
{
    
    public function index()
    {
        $stores = store::orderBy('id','desc')->get();
        return StoreResource::collection($stores);
    }


    public function store(Request $request)
    {
       $store = new store;
       $store->storename = $request->storename;
       $store->sdescrip  = $request->sdescrip;
       
        if($store->save()){
            return new StoreResource($store);
      }
    }

     
    public function show($id)
    {
       $store = store::find($id);
       return $store; 
    }
 
    public function update(Request $request, $id)
    {
        $store = store::find($id);
        $store->storename = $request->storename;
        $store->sdescrip  = $request->sdescrip;
          
        if($store->save()){
            return new StoreResource($store);
        }
         
    }

     
    public function destroy($id)
    {
        $store = store::findOrFail($id);

        if($store->delete()){
         return new StoreResource($store);
        }
    }
}
