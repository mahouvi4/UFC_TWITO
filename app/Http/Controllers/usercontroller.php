<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ufc;
use Illuminate\Http\Request;

class usercontroller extends Controller
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
        return view('etudiant.create',['ufc'=>$ufc]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function user_securite(){
         if(session('info_user')){
            return view('etudiant.user_securite');
         }else{
            return redirect('user/for_login_user');

         }
           
        
     }

     public function verification_security(Request $request){
         if(session('info_user')){
     
            if(empty($request->code_securite)){
                return response()->json(['status'=>300,'message'=>'Parece que voce esqueceu de preencher o campo da entrada, verifique e tente novamente. . .']);
            }elseif(User::where(['email'=>$request->email,'matricula'=>$request->matricula,'code_secutite'=>$request->code_securite])->count() > 0){
                 $info = User::where(['email'=>$request->email,'matricula'=>$request->matricula,'code_secutite'=>$request->code_securite])->get();
                  session(['info'=>$info]);
             return response()->json(['status'=>200,'message'=>'success']);
                  
             }else{
                return response()->json(['status'=>100,'message'=>'Codigo negado, por favor certifique-se de informar o codigo correto que acabamos de enviar para o seu email. . .']);

             }
         }else{
            return redirect('user/for_login_user');
         } 
     }


     public function for_login_user(){
        return view('etudiant.for_log');
       }


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
