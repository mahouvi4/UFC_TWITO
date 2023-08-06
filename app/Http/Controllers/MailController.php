<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\professeur;
use App\Mail\TestMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    
 public function add_user(Request $request){


    if(User::where('email',$request->email)->count() > 0){
        return response()->json(['status'=>600,'message'=>'Desculpe, já existe uma conta com este e-mail que você acabou de informar, por favor crie outra.']);
    }else{
        if(User::where('matricula',$request->matricula)->count() > 0){
            return response()->json(['status'=>500,'message'=>'Desculpe, já existe uma conta com este essa que você acabou de informar, por favor crie outra.']);
        }elseif(empty($request->name) || empty($request->email) || empty($request->matricula) || empty($request->id_ufc) || empty($request->name)){
            return response()->json(['status'=>400,'message'=>'Parece que voce esqueceu de preencher um campo de entrada, verifique e tente novamente.']);

    }else{
            $add_user = new User();
            $add_user->name = $request->name;
            $add_user->email = $request->email;
            $add_user->curso = $request->curso;
            $add_user->matricula = $request->matricula;
            $add_user->id_ufc = $request->id_ufc;
            $add_user->code_secutite = time().'W~/*xhM$@'.rand(1111,9999);
            
                   if($request->Hasfile('photo')){
                    $file = $request->file('photo');
                    $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move('User',$name);
                    $add_user->photo = $name;
                   }
    
            $add_user->save();
                if(User::where(['email'=>$request->email,'matricula'=>$request->matricula])->count() > 0){
                     $info_user = User::where(['email'=>$request->email,'matricula'=>$request->matricula])->get();
                         session(['info_user'=>$info_user]);
                         if(session('info_user')){

                            $info_ = User::where(['email'=>$request->email,'matricula'=>$request->matricula])->first();
               
                $sign_up = [
                    'title'=>'Ola '.$request->name.'!',
                    'body'=>' O seu codigo de segurança é '.$info_->code_secutite,
                    'thank'=> 'UFC-TWITO te Agradece pela Confiança  🐦',
                ];
            
                   Mail::to($request->email)->send(new TestMail($sign_up));
                   //Mail::to("luxuluxu229@gmail.com")->send(new TestMail($likanx));
             

                            return response()->json(['status'=>200,'message'=>'success']);
                         }
                }
                
    
            
        }
    }
        
    
 }

 


  public function login_user(Request $request){
    

       if(empty($request->email) || empty($request->matricula)){
           return response()->json(['status'=>300,'message'=>'Parece que voce esqueceu de preencher o campo da entrada, verifique e tente novamente. . .']);
       }elseif(User::where(['email'=>$request->email,'matricula'=>$request->matricula])->count() > 0){
            $info_user = User::where(['email'=>$request->email,'matricula'=>$request->matricula])->get();
             session(['info_user'=>$info_user]);

                if(session('info_user')){
                    $inx = User::where(['email'=>$request->email,'matricula'=>$request->matricula])->first();
                       $inx->code_secutite = time().'W~/*-aAw~$@$@'.rand(1111,9999);
                       $inx->update();
                $sign_in = [
                    'title'=>'Ola '.$request->name.'!',
                    'body'=>' O seu codigo de segurança é '.$inx->code_secutite,
                    'thank'=> 'UFC-TWITO te Agradece pela Confiança  🐦',
                ];
            
                   Mail::to($request->email)->send(new TestMail($sign_in));
                   //Mail::to("luxuluxu229@gmail.com")->send(new TestMail($likanx));
                   return response()->json(['status'=>200,'message'=>'success']);
             
                }

             
        }else{
           return response()->json(['status'=>100,'message'=>'por favor certifique-se de informar os seus dados correto e tente novamente. . .']);

        }
    
}


 public function add_prof(Request $request){
     
    if(professeur::where('email_prof',$request->email_prof)->count() > 0){
        return response()->json(['status'=>600,'message'=>'Desculpe, já existe uma conta com este e-mail que você acabou de informar, por favor crie outra.']);
    }else{
        if(empty($request->name_prof) || empty($request->email_prof) || empty($request->password1) || empty($request->password2) || empty($request->bio)){
            return response()->json(['status'=>400,'message'=>'Parece que voce esqueceu de preencher um campo de entrada, verifique e tente novamente.']);

        }elseif($request->password1 != $request->password2){
            return response()->json(['status'=>500,'message'=>'Opa, senha incompartiveis.']);
            
    }else{
            $add_prof = new professeur();
            $add_prof->name_prof = $request->name_prof;
            $add_prof->email_prof = $request->email_prof;
            $add_prof->bio = $request->bio;
            $add_prof->password = $request->password1;
            $add_prof->id_ufc = $request->id_ufc;
            $add_prof->securty_code = time().'W~/*xhM$@'.rand(1111,9999);
            
                   if($request->Hasfile('photo')){
                    $file = $request->file('photo');
                    $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move('prof',$name);
                    $add_prof->photo = $name;
                   }
    
            $add_prof->save();
                if(professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password1])->count() > 0){
                     $info_prof = professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password1])->get();
                         session(['info_prof'=>$info_prof]);
                         if(session('info_prof')){

                            $info_ = professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password1])->first();
               
                $sign_up_prof = [
                    'title'=>'Ola Professor (a)'.$request->name_prof.'!',
                    'body'=>' O seu codigo de segurança é '.$info_->securty_code,
                    'thank'=> 'UFC-TWITO te Agradece pela Confiança  🐦',
                ];
            
                   Mail::to($request->email_prof)->send(new TestMail($sign_up_prof));
                   //Mail::to("luxuluxu229@gmail.com")->send(new TestMail($likanx));
             

                            return response()->json(['status'=>200,'message'=>'success']);
                         }
                }
                
    
            
        }
    }
    }



    public function login_prof(Request $request){
    

        if(empty($request->email_prof) || empty($request->password)){
            return response()->json(['status'=>300,'message'=>'Parece que voce esqueceu de preencher o campo da entrada, verifique e tente novamente. . .']);
        }elseif(professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password])->count() > 0){
             $info_prof = professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password])->get();
              session(['info_prof'=>$info_prof]);
 
                 if(session('info_prof')){
                     $inx = professeur::where(['email_prof'=>$request->email_prof,'password'=>$request->password])->first();
                        $inx->securty_code = time().'W~/*-aAw~$@$@'.rand(1111,9999);
                        $inx->update();
                 $sign_in_prof = [
                     'title'=>'Ola '.$request->name_prof.'!',
                     'body'=>' O seu codigo de segurança é '.$inx->securty_code,
                     'thank'=> 'UFC-TWITO te Agradece pela Confiança  🐦',
                 ];
             
                    Mail::to($request->email_prof)->send(new TestMail($sign_in_prof));
                    //Mail::to("luxuluxu229@gmail.com")->send(new TestMail($likanx));
                    return response()->json(['status'=>200,'message'=>'success']);
              
                 }
 
              
         }else{
            return response()->json(['status'=>100,'message'=>'por favor certifique-se de informar os seus dados correto e tente novamente. . .']);
 
         }
     
 }
 

  
 public function destroy_session_user_pre(){
    session()->forget('info_user');
    return response()->json();
  }
 
 public function destroy_session_user_post(){
    session()->forget('info');
    return response()->json();
  }

   
 public function destroy_session_prof_pre(){
    session()->forget('info_prof');
    return response()->json();
  }

   
 public function destroy_session_prof_post(){
    session()->forget('profo');
    return response()->json();
  }





    

}
