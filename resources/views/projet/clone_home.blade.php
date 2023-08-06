<div class="row">

   <div class="col-7">

         @foreach($publication as $item)
         @if($item->photo)
           <div class="card">
           
                          @if($item->id_user != NULL)
                          <div>
                           
                           <label class="seguir" id="{{$item->id}}" style="margin-left:22px;margin-top:-10%;color:#08047A;background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-family:aharoni">     <img src="{{asset('user/'.$item->user->photo)}}" class="imgx">seguir 👈</label>
                                 
                           </div>
                            @else

                            <div>
                           
                           <label class="seguir" id="{{$item->id}}" style="margin-left:22px;margin-top:-10%;color:#08047A;background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-family:aharoni">     <img src="{{asset('prof/'.$item->prof->photo)}}" class="imgx">seguir 👈</label>
                                 
                           </div>
                          @endif
                           
                          
                 
                 <form method="POST">
                @if($item->id_user != NULL)
                 <div class="form-group">
                           
                           <p  style="color:rgb(218, 247, 166);font-family:cambria">{{$item->profile.': '.$item->user->name}}</p>
                           
                 </div>
                  @else
                  <div class="form-group">
                           
                           <p  style="color:rgb(218, 247, 166);font-family:cambria">{{$item->profile.': '.$item->prof->name_prof}}</p>
                           
                 </div>

                 @endif

                 <div class="form-group">
                           
                           <p class=" desc" style="color:#f4f5f6f3;font-family:cambria">je suis daccord mais on devra renegocier par rapport a cette question.</p>
                           
                 </div>
                 <div class="form-group">
                           
                           <img src="{{asset('publication1/'.$item->photo)}}" class="imgxx">
                           
                </div>
                   

             

                 </form>
               



                 
         
            <div class="form-group" style="margin:auto">
         
                  <div class="row">
                      <div class="col-5">
                            <strong style="font-family:Broadway;color:#1bffff">{{$item->count_lik}}</strong> <i class='bx bxs-like bx-sm xiofl liko' id="{{$item->id}}"></i>
   
                      
                      </div>


                      <div class="col-5">
                           <strong style="font-family:Broadway;color:#ed0a70">{{$item->nb_com}}</strong><i class="bx bx-message-alt xiofl id_public" style="font-size:1.5em" id="{{$item->id}}"></i>
                      </div>


                    



            </div>

                                          
                


                                                           
                                          
                </div>
            </div> 

             <br><br>
               @elseif($item->video)
               <div class="card">
               @if($item->id_user != NULL)
                          <div>
                         
                              <label class="seguir" id="{{$item->id}}" style="margin-left:22px;margin-top:-10%;color:#08047A;   background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-family:aharoni">     <img src="{{asset('user/'.$item->user->photo)}}" class="imgx">seguir 👈</label>
                                 
                           </div>     
                     

                           @else
                           <div>
                         
                              <label class="seguir" id="{{$item->id}}" style="margin-left:22px;margin-top:-10%;color:#08047A;   background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-family:aharoni">     <img src="{{asset('prof/'.$item->prof->photo)}}" class="imgx">seguir 👈</label>
                            
                         </div>  

                           @endif

                 <form method="POST">
                 <div class="form-group">
                           
                           <p  style="color:rgb(218, 247, 166);font-family:cambria">{{$item->profile.':'.$item->namo}}.</p>
                           
                 </div>

                 <div class="form-group">
                           
                           <p  style="color:#f4f5f6f3;font-family:cambria">je suis daccord mais on devra renegocier par rapport a cette question.</p>
                           
                 </div>

                 <div class="form-group">
                           
                        <video  height="230" width="100%" controls >
                               <source src="{{asset('publication/'.$item->video)}}" type="video/mp4" style="boder-radius:15px"></source>
                      
                        </video>                           
                </div>
                

                 </form>
                 <div class="form-group" style="margin:auto">
                  <div class="row">
                  <div class="col-5">
                            <strong style="font-family:Broadway;color:#1bffff">{{$item->count_lik}}</strong> <i class='bx bxs-like bx-sm xiofl liko' id="{{$item->id}}"></i>
   
                      
                      </div>


                      <div class="col-5">
                           <strong  style="font-family:Broadway;color:#ed0a70">{{$item->nb_com}}</strong><i class="bx bx-message-alt xiofl id_public" style="font-size:1.5em" id="{{$item->id}}"></i>
                      </div>




                  </div>

                                          
                </div>
                
            </div>
            <br><br>  

                                             

            @endif
         @endforeach  
         
           
            @dump(session('info'))
   </div>
  

               <div class="col-5">
                      
                      <div class="card" style="width:80%;background:linear-gradient(-100deg,rgb(1, 16, 22), rgb(218, 247, 166));" >
                             <div class="dov"><marquee><b style="font-family:Broadway;background:linear-gradient(-100deg,rgb(1, 16, 22));font-size:1em">🐦Resultato Pesquisa🐦</b></marquee></div>
                      </div>

                      @foreach($all_ufc as $item)
                     <div class="card" style="width:80%;height:120px;background:linear-gradient(-100deg,rgb(1, 16, 22), #076c80);" >
                        <img src="{{asset('ufc/'.$item->photo)}}" style="width:100%;border-radius:15px;height:55px" class="olio">
                       <strong><marquee  style="font-family:cambria;color:#ed0a70">🐦{{$item->name_ufc}}🐦</marquee></strong>
                    </div>
                 @endforeach
                   @if(isset($user))
                 @foreach($user as $item)
                     <div class="card" style="width:80%;height:120px" >
                        <img src="{{asset('user/'.$item->photo)}}" style="width:100%;border-radius:15px;height:55px" class="olio">
                       <strong><marquee  style="font-family:cambria;color:#ed0a70">🐦{{$item->name}}🐦</marquee></strong>
                    </div>
                 @endforeach
                  @endif

                  @if(isset($prof))
                 
                 @foreach($prof as $item)
                 
                     <div class="card" style="width:80%;height:120px" >
                        <img src="{{asset('prof/'.$item->photo)}}" style="width:100%;border-radius:63px;height:55px" class="olio">
                       <strong><marquee  style="font-family:cambria;color:#ed0a70">🐦{{$item->name_prof}}🐦</marquee></strong>
                    </div>
                 @endforeach
                 @endif
                 
              </div>

               @if(session('info'))
                     <input type="text" class="acteur" value="{{session('info')[0]->id}}">
               @elseif(session('profo'))

               <input type="text" class="acteur" value="{{session('profo')[0]->id}}">


               @endif

</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

        $(function(){
          
          $(".id_public").on("click",{},function(){
              id_pub = $(this).attr('id');
            
              $.get("{{url('projet/formulaire_commentaire')}}/"+id_pub,{},function(data){
              
               //console.log(data);
                $("#lox1").html(data);
                $("#general1").show();
              


              })
                
            })
          })
    </script>

    <script>
        $(function(){
          $(".btn-secondary").on("click",function(){
            $("#general1").hide();
          })
        })
    </script>

    

 <script>
   var id_pub;
     $(".id_public").on('click',function(){
      id_pub = $(this).attr('id');

        /* $(function(){
            $.get("{{url('projet/formulaire_commentaire')}}/"+id_pub,{},function(data){
              $("#charge").html(data);
             // alert(data);
        
      })
           })*/
      

    })

      

    function add_comment(){
          //alert(id_pub)
          var message;
          message = $(".il1").val();
          console.log(message);
          console.log(id_pub);
          $.ajax({
             type : "get",
             url : "{{url('projet/add_comment')}}",
             data:{
               id_publication : id_pub,
               message : message,
             },

          success:function(response){
             // alert('okk')
          
            $.get("{{url('projet/formulaire_commentaire')}}/"+id_pub,{},function(data){
              $("#supox").hide();
             $("#rendero").html(data);
            // $("#sti").show();
            // $("#rendero").load();
   

            
  
            //  console.log(data);
           // console.log(response);
          
             $(".vider").html("");
             
        
      })
     
                //$(".modal-body").show();
             

             if(response.status == 300){
               alert('vide');
             }





          }

          })

   
    

        }
  </script>

  <script>
   /* var id_;
     $(".id_public").on('click',function(){
      id_ = $(this).attr('id');
      //console.log(id_);

    })
        
   
    
      function char(){
      $.get("{{url('projet/formulaire_commentaire')}}/"+id_,{},function(data){
       $("#charge").html(data);
           //console.log(data) 
          })
    
        }
      */
  </script>

  <script>
     $(function(){
      var id_publication;
      $(".seguir").on('click',function(){
        id_publication = $(this).attr('id');
        //alert(id_publication);
        $.ajax({
          type : "get",
          url : "{{url('projet/seguir')}}/"+id_publication,
          data : {
            id_publication : id_publication,
          },
          success:function(response){
           if(response.status == 200){
            alert('okkk')
           }

           if(response.status == 300){
            alert('voce nao pde se seguir')
           }

           if(response.status == 400){
            alert('vc ja esta incrito')
           }

           if(response.status == 500){
            alert('vc ja esta incrito')
           }

          }
        })
      })
     })
  </script>



 <script>
        $(document).ready( function(){
           $(".eolo").on("click",function(){
           // const ddd = document.querySelector(".su_reponx").id;
            alert('okkk')
           })
         
        })
     </script>


      
   <script>
  
        $(function(){
          var lik,acteur;
            $(".liko").on("click",function(){
              lik = $(this).attr('id');
                 acteur  = $(".acteur").val();
                // alert(acteur)
             // alert(lik)
                  $.ajax({
                     type:"get",
                     url : "{{url('projet/like')}}",
                     data : {
                        id_publication : lik,
                        acteur : acteur,

                     },

                     success:function(response){
                       if(response.status == 200){
                            alert('okk');
                       }

                       if(response.status == 400){
                            alert('no repeat');
                       }


                       if(response.status == 500){
                            alert('prof no repeat');
                       }
                     }
                  })

            })
        })

</script>
        



