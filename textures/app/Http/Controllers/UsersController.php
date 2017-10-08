<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class UsersController extends Controller
{
    //

    public function index()
    {
       /* public function testajax($id) {
            
            $test = table::findorfail($id)->toarray();
            return response()->json($test); */
           
     //   $data = DB::table('random')->get();

       
      //  $items = Items::all()->toJson();
       // return view('items.create', compact('items'));
        
    //   $data = $data->toJson();
     //  return view('3dbrushes', compact(response('data')));

     return view('3dbrushes');
      
    
       
        
               
             //  return view('3dbrushes',compact(response()->json($data)));

              // return view('3dbrushes',compact(response($data->toJson())));

           //  return response($data->toJson());
           // return "ok";
                           
        
        
       
    }

    public function readData()
    {
                
        $data = DB::table('random')->get();
        
               
              //  $items = Items::all()->toJson();
               // return view('items.create', compact('items'));
                
              // $data = $data->toJson();
             //  return response('data');
             return response($data->toArray());

    }
}
