<?php

namespace App\Http\Controllers;
use App\Models\professeur;
use App\Models\ufc;
use Illuminate\Http\Request;

class professeurcontroller extends Controller
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
        $ufc = ufc::all();
        return view('prof.create',['ufc'=>$ufc]);
    }

    public function create_security(){
        if(session('info_prof')){
        return view('prof.create_security');
      }else{
        return redirect('prof/create_prof_log');

      }
    }

    public function security_prof(Request $request){
        if(session('info_prof')){
     
            if(empty($request->securty_code)){
                return response()->json(['status'=>300,'message'=>'Parece que voce esqueceu de preencher o campo da entrada, verifique e tente novamente. . .']);
            }elseif(professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password1,'securty_code'=>$request->securty_code])->count() > 0){
                 $profo = professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password1,'securty_code'=>$request->securty_code])->get();
                  session(['profo'=>$profo]);
             return response()->json(['status'=>200,'message'=>'success']);
                  
             }else{
                return response()->json(['status'=>100,'message'=>'Codigo negado, por favor certifique-se de informar o codigo correto que acabamos de enviar para o seu email. . .']);

             }
         }else{
            return redirect('prof/create_prof_log');

         }
    }



 public function create_prof_log(){
   
        return view('prof.prof_log');
    
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
