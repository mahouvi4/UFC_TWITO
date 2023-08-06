<?php

namespace App\Http\Controllers;
use App\Models\ufc;

use Illuminate\Http\Request;

class ufccontroller extends Controller
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
        return view('ufc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(empty($request->name_ufc) || empty($request->email_ufc) || empty($request->photo) || empty($request->biblio_ufc)){
            return response()->json(['status'=>300,'message'=>'Opa,certifique-se de preencher todos os campos de entrada!']);
         }else{
             $ufc = new ufc();
             $ufc->name_ufc = $request->name_ufc;
             $ufc->email_ufc = $request->email_ufc;
             $ufc->biblio_ufc = $request->biblio_ufc;
             if($request->hasfile('photo')){
                $file = $request->file('photo');
                $name = time().'.'.$file->getClientOriginalExtension();
                $file->move('ufc',$name);
                $ufc->photo = $name;
             }


             $ufc->save();
             return response()->json(['status'=>200,'New UFC saved successfull!']);

         }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
