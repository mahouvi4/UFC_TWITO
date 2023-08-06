<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\seguir;
use App\Models\professeur;
use App\Models\ufc;
use App\Models\publication;
use App\Models\commentaire;
use App\Models\responx_comment;
use App\Models\like;
use App\Models\privado;

use Illuminate\Http\Request;

class projetcontroller extends Controller
{

 public function papa(){

        
         return view('projet.papa');
   
 }

    public function create(){
        $all_ufc = ufc::all();
        $publication = publication::where('statut','1')->orderBy('id','desc')->get();
        $user = User::all();
        $prof = professeur::all();
             
    
       
      
        return view('projet.clone_home',['all_ufc'=>$all_ufc,'publication'=>$publication,'user'=>$user,'prof'=>$prof]);
    }

    public function publication(){
        if((session('info')) || (session('profo'))){
           
            if(session('info')){
                $uz = session('info')[0]->id;
                $publication = publication::where('id_user',$uz)->orderBy('id','desc')->take(2)->get();
                $publication1_all = publication::where('id_user',$uz)->orderBy('id','desc')->get();


                return view('projet.publication',['publication'=>$publication,'publication1_all'=>$publication1_all]);

            }elseif(session('profo')){
                $pr = session('profo')[0]->id;
                $publication = publication::where('id_prof',$pr)->orderBy('id','desc')->take(2)->get();
                $publication1_all = publication::where('id_prof',$pr)->orderBy('id','desc')->get();

                return view('projet.publication',['publication'=>$publication,'publication2_all'=>$publication1_all]);

            }
        }else{
            return redirect('user/for_login_user');
        }
    }


   public function add_publication(Request $request){
    if(session('profo') || session('info')){
     if(empty($request->description)){
        return response()->json(['status'=>300,'message'=>'Opa,é obrigatorio de preencher pelo menos a descripçao da sua postagem.Preencha e tente novamente']);
     }else{
         $publication = new publication();
         $publication->description = $request->description;
         if(session('profo')){
            $publication->profile = "Professor (a)";
            $publication->namo = session('profo')[0]->name_prof;
            $publication->id_prof = session('profo')[0]->id;
         }elseif(session('info')){
            $publication->profile = "Estudante";
            $publication->namo = session('info')[0]->name;
            $publication->id_user = session('info')[0]->id;

         }

         if($request->hasfile('photo')){
            $file = $request->file('photo');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file->move('publication1',$name);
            $publication->photo = $name;

        }

       /* if($request->hasfile('video')){
            $file = $request->file('video');
            $name = time().'.'.$file->getClientOriginalName();
            $file->move('publication2',$name);
            $publication->video = $name;

        }*/


        if($request->hasfile('video')){
       
            $file = $request->file('video');
            $file->move('publication',$file->getClientOriginalName());
            $file_name = $file->getClientOriginalName();
            $publication->video = $file_name;

        }




        $publication->save();
        return response()->json(['status'=>200,'message'=>'Pulicaçao efectuada com successo']);



     }


    }else{
        return redirect('user/for_login_user');
  
    }


   }

  

   
  public function formulaire_commentaire($id){
   $affich_comment = commentaire::where('id_publication',$id)->get();
   //dd($affich_comment);
    return view('projet.commentaire',['affich_comment'=>$affich_comment]);
  }
  
  


  public function add_commentaire(Request $request){
   if(session('info')  || session('profo')){
    $add_comment = new commentaire();
    if(session('info')){
        $add_comment->id_user = session('info')[0]->id;
        $add_comment->auteur = session('info')[0]->name;
        $add_comment->profile = "Estudante";

    }elseif(session('profo')){
        $add_comment->id_prof = session('profo')[0]->id;
        $add_comment->auteur = session('profo')[0]->name_prof;
        $add_comment->profile = "Professor";

    }

    if(empty($request->message)){
        return response()->json(['status'=>300,'message'=>'message vide']);
    }else{
        $add_comment->message = $request->message;
       
    }
    $add_comment->id_publication = $request->id_publication;
    $add_comment->id_fix = time().''.rand(1111,9999);
    $add_comment->save();

    $count_com = commentaire::where('id_publication',$request->id_publication)->count();
    //dd($count_com);
      $insert_pub_count = publication::find($request->id_publication);
      $insert_pub_count->nb_com = $count_com;
      $insert_pub_count->update();

    $affich_comment = commentaire::where('id_publication',$request->id_publication)->get();
     //dd($affich_comment);


    $output='';
    if(count($affich_comment) > 0){
       

        $output .='
        <div class="container">
        <div class="content">
        <div class="row">
          <form method="POST" id="aaa">
          
       
      ';

        foreach($affich_comment as $item){
            $output .='
            <div class="card su_reponx eolo" id='.$item->id.'>
    
              
                  <div>
                        <img  src="' . url("logou/log4.png") . '"  alt=""/>
                  </div>
                         <span style="background:linear-gradient(-100deg, rgb(218, 247, 166),rgb(1, 16, 22))">'.$item->profile.' '.$item->auteur.' </span>
                                   <p style="  background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);">'.$item->message.' </p>
                            <p style="text-align:right; background:linear-gradient(-100deg, #1bffff,rgb(1, 16, 22));">'.$item->created_at.' </p>
               
                

                            <div class="group-control">
                                  <details><textarea id="'.$item->id.'" style="border-radius:9px;width:100%" name="reponse" class="reponxi"></textarea><a href="#" class="btn btn"  style="border:none;border-radius:20px;width:50%;background-color:#79C2F2;margin-left:75px;" onclick="ekox()">Send</a>
                            </div>


                 
                 <div id="su_t"></div>
               
    
            </div>
            ';
          }
    
          $output .='
          
           </form>

           <input text="hidden" id="id_lien">
           <input text="hidden" id="salv">
             </div>
             </div>
             </div>
          ';
    
            }else{
            $output .='No Result';
            }

            //dd($output);
    
        return response()->json($output);
       
        }
       

  
   

  }

 
  


   
   public function seguir(Request $request,$id){
  
       if(session('info') || session('profo')){
        $who1 = 1;
        $who2 = 2;
       // $sexi1 = session('info')[0]->id;
       // dd($sexi1);
       // $sexi2 = session('prof')[0]->id;
      //  dd($sexi2);
        //seguir::where(['id_user'=>$uzer ,'id_prof'=>$prof])->count() > 0
           $id_publication = $request->id_publication;


           $pub = publication::find($id);
          
          // dd($pub->id_prof);
          

             if((session('info') && (seguir::where(['id_user'=> session('info')[0]->id,'id_prof'=>$pub->id_prof])->count() > 0)) || (session('profo') && seguir::where(['id_prof'=> session('profo')[0]->id,'id_user'=>$pub->id_user])->count() > 0)){
                return response()->json(['status'=>400,'message'=>'vc nao pode se seguir']);
             }else{
               
                  
                $seguir = new seguir(); 
                    if(($pub->id_user == NULL)  && (session('info'))){
                        $seguir->id_user = session('info')[0]->id;
                        $seguir->email_user = session('info')[0]->email;
                        $seguir->name_user = session('info')[0]->name;
                        $seguir->email_prof = $pub->prof->email_prof;
                        $seguir->id_prof = $pub->prof->id;
                        $seguir->whox = 1;
                        
                    }elseif(($pub->id_prof == NULL)  && (session('profo'))){
            
                        $seguir->id_prof = session('profo')[0]->id;
                        $seguir->email_prof = session('profo')[0]->email_prof;
                        $seguir->name_prof = session('profo')[0]->name_prof;
                        $seguir->email_user = $pub->user->email;
                        $seguir->id_user = $pub->user->id;
                        $seguir->whox = 2;
            
                         
                    }else{
                        return response()->json(['status'=>300,'message'=>'vc nao pode se seguir']);
                    }
                    
                    $seguir->save();
                    return response()->json(['status'=>200,'mesage'=>'acabou de seguir']);
            
    
                   
    
                 
    
    
    
             }

            
               
        

         

     
       }else{
         
       }

        
        

    
   }

    public function formulaire_sous_reponse(Request $request){
        $id = $request->id_commentaire;
        $ele = commentaire::where('id',$id)->first();
        session(['sub'=>$ele]);
        return view('projet.for_sous_resp',['ele'=>$ele]);
    }


   
    public function sous_reponse(Request $request){
    


    }

     public function store_response(Request $request){
        if(session('info') || session('profo')){
            if(session('info')){
                if(empty($request->mess_a)){
                    return response()->json(['status'=>300,'message'=>'champ vide']);
                }else{
                     $add_responx = new responx_comment();
                     $add_responx->id_user  = session('info')[0]->id;
                     $add_responx->namo  = session('info')[0]->name;
                     $add_responx->profile = "Estudante";



                }

              
                
            }elseif(session('profo')){
                if(empty($request->mess_a)){
                    return response()->json(['status'=>300,'message'=>'champ vide']);
                }else{
                     $add_responx = new responx_comment();
                     $add_responx->id_prof  = session('profo')[0]->id;
                     $add_responx->namo  = session('profo')[0]->name_prof;
                     $add_responx->profile = "Professor(a)";

                    

                }
              

        }
        $add_responx->id_commentaire = $request->id_a;
        $add_responx->reponse = $request->mess_a;
        $add_responx->save();


              $sub_resp = responx_comment::where('id_commentaire',$add_responx->id_commentaire)->count();
                        $comment = commentaire::find($add_responx->id_commentaire);
                        $comment->count_responx = $sub_resp;
                        $comment->save();
              
              
            /*  $eject_resp_coment =  new commentaire();
           if(session('info')){
                $eject_resp_coment->auteur = session('info')[0]->name;
                $eject_resp_coment->profile = "Estudante";
                $eject_resp_coment->id_user = session('info')[0]->id;
                $eject_resp_coment->id_clone_comment = $request->id_a;
                $eject_resp_coment->response_clone = $request->mess_a;
                $eject_resp_coment->message = "je suis sous reponse";
                $eject_resp_coment->statut = 2;


             }else if(session('profo')){
                $eject_resp_coment->auteur = session('profo')[0]->name_prof;
                $eject_resp_coment->profile = "Professor";
                $eject_resp_coment->id_user = session('profo')[0]->id;
                $eject_resp_coment->id_clone_comment = $request->id_a;
                $eject_resp_coment->response_clone = $request->mess_a;
                $eject_resp_coment->message = "je suis sous reponse";
                $eject_resp_coment->statut = 2;


             }

             $eject_resp_coment->save();*/


        return response()->json(['status'=>200,'message'=>'merciii']);


     }

}

 
                public function perfil($id){
                if(session('info')){
                    $ufc = ufc::all();
                    $perfil = User::find($id);
                    return view('projet.perfil_user',['perfil'=>$perfil,'ufc'=>$ufc]);
                }elseif(session('profo')){
                    $ufc = ufc::all();
                    $perfil = professeur::find($id);
                    return view('projet.perfil_prof',['perfil'=>$perfil,'ufc'=>$ufc]);
                }

                    
            }


   public function edit_user(Request $request,$id){
    if(session('info')){
        $edit = User::find($id);
        $edit->email = $request->email;
        $edit->name = $request->name;
        $edit->curso = $request->curso;
        $edit->id_ufc = $request->id_ufc;


        if($request->Hasfile('photo')){
            $file = $request->file('photo');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file->move('User',$name);
            $edit->photo = $name;
        }

        $edit->update();
        return response()->json(['status'=>200,'message'=>'alterado com suecesso']);

    }
   }



   public function edit_prof(Request $request,$id){
    if(session('profo')){
        $edit = professeur::find($id);
        $edit->email_prof = $request->email_prof;
        $edit->name_prof = $request->name_prof;
        $edit->bio = $request->bio;
        $edit->id_ufc = $request->id_ufc;


        if($request->Hasfile('photo')){
            $file = $request->file('photo');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file->move('prof',$name);
            $edit->photo = $name;
        }

        $edit->update();
        return response()->json(['status'=>200,'message'=>'alterado com suecesso']);

    }
   }



  public function vide_conference($id){
   
         
         $vid_conf = professeur::find($id);
          //dd($vid_conf);
         return view('index',['vid_conf'=>$vid_conf]);

    
  }



 public function search1(Request $request){
    if(session('profo') || session('info')){
        //dd($request->search1);
        $search_prof = professeur::where('name_prof','LIKE','%'.$request->search1.'%')->get();
        return response()->json($search_prof);
   
   
    }
 }


 public function profil_inta($id){
    $prof_inta = professeur::find($id);
    $pub = publication::where('id_prof',$id)->orderby('id','Desc')->get();
    return view('projet.profil_inta',['prof_inta'=>$prof_inta,'pub'=>$pub]);

 }


 public function search2(Request $request){
    if(session('profo') || session('info')){
        
        $search_prof = User::where('name','LIKE','%'.$request->search1.'%')->get();
        return response()->json($search_prof);
   
   
    }
 }


 public function profil_inta2($id){
    $prof_inta = User::find($id);
    $pub = publication::where('id_user',$id)->orderby('id','Desc')->get();

    return view('projet.profil_inta2',['prof_inta'=>$prof_inta,'pub'=>$pub]);

 }


public function like(Request $request){
     
       
         if(session('info')){
            
                        if(like::where('id_user',$request->acteur)->where('id_publication',$request->id_publication)->count() > 0){
                                return response()->json(['status'=>400,'message'=>'alterado com suecesso']);

                        }else{

                            $like = new like();
                            $like->id_user =  $request->acteur;
                            $like->id_publication = $request->id_publication;
                            $like->save();


                            $count_lik = like::where('id_publication',$request->id_publication)->count(); 
                             // dd($count_lik);
                             $publication = publication::find($like->id_publication);
                             $publication->count_lik = $count_lik;
                             $publication->update();
                             return response()->json(['status'=>200,'message'=>'Obrigado por ter gostado do nosso trabalho']);
                           
                        }

           


              
      }elseif(session('profo')){

        if(like::where('id_prof',$request->acteur)->where('id_publication',$request->id_publication)->count() > 0){
            return response()->json(['status'=>500,'message'=>'alterado com suecesso']);
        
      }else{

        $like = new like();
        $like->id_prof = $request->acteur;
        $like->id_publication = $request->id_publication;
        $like->save();


                            $count_lik = like::where('id_publication',$request->id_publication)->count(); 
                             // dd($count_lik);
                             $publication = publication::find($like->id_publication);
                             $publication->count_lik = $count_lik;
                             $publication->update();
                             return response()->json(['status'=>200,'message'=>'Obrigado por ter gostado do nosso trabalho']);

      }


 }
             

        
     
}



public function msg_priv($id){

    $priv_receiv_prof = professeur::find($id);

    //dd($priv_receiv_prof);

    return view('projet.privado',['priv_receiv_prof'=>$priv_receiv_prof]);

}


public function add_comment_priv(Request $request){
    if(session('info') || session('profo')){
         if(session('profo')){
            $uz = session('profo')[0]->id;
            $comment_priv_prof = new privado();
            $comment_priv_prof->decript_prof = $request->hote_prof;
            $comment_priv_prof->message = $request->message;
            $comment_priv_prof->id_prof = $uz;
            //dd($comment_priv_prof);
           




           // return response()->json(['status'=>200,'message'=>'merci']);

         }else if(session('info')){
            $uzx = session('info')[0]->id;
             $comment_priv_prof = new privado();
             $comment_priv_prof->decript_prof = $request->hote_prof;
             $comment_priv_prof->message = $request->message;
            $comment_priv_prof->id_user = $uzx;
            //dd( $comment_priv_prof);


      
            }



            $comment_priv_prof->save();


          //$request->hote_prof
                if($comment_priv_prof->decript_prof != NULL){
                 $pr = $comment_priv_prof->decript_prof; //$request->hote_prof;
                // dd($pr);
                 $msg_priv  = privado::where('decript_prof',$request->hote_prof)->where('statut','1')->get();
                  //dd($msg_priv->count()) ;
                 $count_prof = professeur::find($comment_priv_prof->decript_prof);
                 $count_prof->count_msg_prof = $msg_priv->count();
                 $count_prof->update();
                 
                }
        
               
               

            return response()->json(['status'=>200,'message'=>'merci']);




    }
}









 
public function msg_priv_2($id){

    $priv_receiv_user = User::find($id);

    //dd($priv_receiv_user);

    return view('projet.privado2',['priv_receiv_user'=>$priv_receiv_user]);

}



public function add_comment_priv_2(Request $request){
    if(session('info') || session('profo')){
         if(session('profo')){
            $uz = session('profo')[0]->id;
            $comment_priv_prof = new privado();
            $comment_priv_prof->decript_user = $request->hote_prof;
            $comment_priv_prof->message = $request->message;
            $comment_priv_prof->id_prof = $uz;
            //dd($comment_priv_prof);
          
         }else if(session('info')){
            $uzx = session('info')[0]->id;
             $comment_priv_prof = new privado();
             $comment_priv_prof->decript_user = $request->hote_prof;
             $comment_priv_prof->message = $request->message;
            $comment_priv_prof->id_user = $uzx;
            //dd( $comment_priv_prof);
            
            }


         $comment_priv_prof->save();
              
            
            if($comment_priv_prof->decript_user != NULL){
                        $pr = $comment_priv_prof->decript_user; //$request->hote_prof;
                        // dd($pr);
                        $msg_priv2  = privado::where('decript_user',$request->hote_prof)->where('statut','1')->get();
                        //dd($msg_priv2->count()) ;
                        
                       $count_prof = User::find($comment_priv_prof->decript_user);
                        $count_prof->count_msg_user = $msg_priv2->count();
                        $count_prof->update();
                }



                        return response()->json(['status'=>200,'message'=>'merci']);

    }
}


   

   public function message_priv_show_prof(){
     if(session('profo')){
        $pr = session('profo')[0]->id;
        //$id_x = professeur::find($id);
        $msg_priv  = privado::where('decript_prof',$pr)->where('statut','1')->orderBy('id','desc')->get();

       //  $msg_priv  = privado::where('decript_prof',$pr)->orWhere('id_prof',$pr)->where('statut','1')->orderBy('id','desc')->select('id_prof')->distinct()->select('id_user')->distinct()->get();
         //dd($msg_priv);
         return view('projet.show_priv_prof',['msg_priv'=>$msg_priv]);

     }

   }



   public function message_priv_show_user(){
    if(session('info')){
       $uz = session('info')[0]->id;
       $msg_priv  = privado::where('decript_user',$uz)->where('statut','1')->orderBy('id','desc')->get();
      // dd($msg_priv);
        return view('projet.show_priv_user',['msg_priv'=>$msg_priv]);
    }

  }


  /* 
      
   public function message_priv_show_prof(){
     if(session('profo')){
        $pr = session('profo')[0]->id;
        //$id_x = professeur::find($id);
        $msg_priv  = privado::where('decript_prof',$pr)->orWhere('id_prof',$pr)->where('statut','1')->orderBy('id','desc')->get();

       //  $msg_priv  = privado::where('decript_prof',$pr)->orWhere('id_prof',$pr)->where('statut','1')->orderBy('id','desc')->select('id_prof')->distinct()->select('id_user')->distinct()->get();
         //dd($msg_priv);
         return view('projet.show_priv_prof',['msg_priv'=>$msg_priv]);

     }

   }
  */


   public function chat_priv_prof_reviz(Request $request,$id){
    if(session('profo')){
        $pero = privado::find($id);
        //dd($pero);
         if($pero->id_user == NULL){
           
           $chat_prof = privado::where('decript_prof',session('profo')[0]->id)->where('id_prof',$pero->id_prof)->get();
         //  dd($chat_prof);
         return view('projet.chat_priv_prof',['chat_prof'=>$chat_prof]);
        // return response()->json($chat_prof);
       

         }elseif($pero->id_prof == NULL){
           $chat_prof = privado::where('decript_prof',session('profo')[0]->id)->where('id_user',$pero->id_user)->get();
           //dd($chat_prof);
          return view('projet.chat_priv_prof',['chat_prof'=>$chat_prof]);
        // return response()->json($chat_prof);

         }


  }elseif(session('info')){
                   $pero = privado::find($id);
                  // dd($pero->id_user);
                   if($pero->id_user != NULL){
                  //  $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_prof',$pero->id_prof)->get();

                   $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_user',$pero->id_user)->get();

                  // dd($chat_prof);
                  return view('projet.chat_priv_user',['chat_prof'=>$chat_prof]);
                                   // return response()->json($chat_prof);


                   }elseif($pero->id_prof != NULL){
                  // $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_user',$pero->id_user)->get();
                   $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_prof',$pero->id_prof)->get();

                   //dd($chat_prof);
                   return view('projet.chat_priv_user',['chat_prof'=>$chat_prof]);
                                   //  return response()->json($chat_prof);


                   }
  }

   }



     /* public function chat_priv_prof(Request $request){
           if(session('profo')){
                 $pero = privado::find($request->id_privado);
                 //dd($pero);
                  if($pero->id_user == NULL){
                    
                    $chat_prof = privado::where('decript_prof',session('profo')[0]->id)->where('id_prof',$pero->id_prof)->get();
                  //  dd($chat_prof);
                  //  return view('projet.chat_priv_prof',['chat_prof'=>$chat_prof]);
                  return response()->json($chat_prof);
                

                  }elseif($pero->id_prof == NULL){
                    $chat_prof = privado::where('decript_prof',session('profo')[0]->id)->where('id_user',$pero->id_user)->get();
                    //dd($chat_prof);
                  //  return view('projet.chat_priv_prof',['chat_prof'=>$chat_prof]);
                  return response()->json($chat_prof);

                  }


           }elseif(session('info')){
                            $pero = privado::find($request->id_privado);
                            //dd($pero);
                            if($pero->id_user == NULL){
                            $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_prof',$pero->id_prof)->get();
                           // dd($chat_prof);
                           // return view('projet.chat_priv_user',['chat_prof'=>$chat_prof]);
                                             return response()->json($chat_prof);


                            }elseif($pero->id_prof == NULL){
                            $chat_prof = privado::where('decript_user',session('info')[0]->id)->where('id_user',$pero->id_user)->get();
                            //dd($chat_prof);
                            //return view('projet.chat_priv_user',['chat_prof'=>$chat_prof]);
                                              return response()->json($chat_prof);


                            }
           }
      }*/




    public function imagex($id){
         if(session('info')){
            $user  = User::find($id);
             $show_img = publication::where('id_user',$user->id)->where('statut',1)->orderBy('id','desc')->get();
               dd($show_img);
        return view('projet.imux',['show_img'=>$show_img]);

         }
    }






}