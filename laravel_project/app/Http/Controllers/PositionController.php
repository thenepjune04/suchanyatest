<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //GET KEYWORD FROM URL
        $q = $request->input('q');
        //METHOD : 2 SHORT
        //NOT EMPTY = HAVE SOME KEYWORD in $q
            $position = ( !empty($q) ) ? 
            Position::search($q) : 
            Position::getAll();
        //PACK DATA
            $data = [
            "positions" => $position ,
            "q" => $q,    //send $q to display in view
        ];
        //DISPLAY IN VIEW
        return view('position/index',$data);
    }

    public function create()
    {
        return view("position/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //GET ARRAY OF ALL DATA FROM THE PREVIOUS FORM BY NAME ATTRIBUTE
        $item = $request->all();        
            //$item = $request->except(['_method','_token']);
        $position = position::storeItem($item);
        $id = $position->id;
    return redirect("/position/{$id}/edit");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            $data = [
            "position" => position::getItem($id),
            ];
        return view('position/show',$data);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "position" => position::getItem($id),
            ];
            return view("position/edit",$data);
            
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
        $item = $request->all();        
        //$item = $request->except(['_method','_token']);
        $position = position::updateItem($id,$item);
        return redirect("/position/{$id}/edit");
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        position::destroyItem($id);
        return redirect('/position');
    }
    
}
