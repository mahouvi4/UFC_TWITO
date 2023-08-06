@extends('base')

@section('css')
  <style>
      body{
        background-color:rgb(1, 16, 22);
       
      }

      .card{
        margin-top: 100px;
        background-color:rgb(1, 16, 22);
        box-shadow: 0 25px 25px rgba(12, 12, 12, 0.885);
      }

      .spam1{
        color:rgb(21, 218, 224);
      }

      button{
        /*box-shadow: 0 25px 25px rgba(4, 60, 70, 0.885);*/


      }

      .part1{
        margin-left: 60px;
      }

      .ligaçao1{
        box-shadow: 0 25px 25px rgb(116, 119, 119);
        margin-left:55px;
        border:none;

      }

      .ligaçao2{
        box-shadow: 0 25px 25px rgba(21, 2, 90, 0.885);
        margin-left:55px;
        border:none;

      }

      .ligaçao3{
        box-shadow: 0 25px 25px rgba(250, 5, 17, 0.885);
        margin-left:55px;
        border:5px solid rgb(3, 32, 32);
        

      }

      .ligaçao4{
        box-shadow: 0 25px 25px rgb(116, 119, 119);;
        margin-left:55px;
        border:5px solid rgb(3, 32, 32);
        background-color:rgb(1, 16, 22);
        color:rgb(116, 119, 119);


      }

    

      .inpo{
        margin-left:-120px;
      }

      .gol{
        color:rgb(116, 119, 119);
      }

      .jov{
        margin-left:762px;
        font-size:2rem;
      }

      img{
            text-align:center;
            margin:auto;
            display:flex;
            height:100px;
            width:20%;
            
      }

      .imo1{
        filter: saturate(3);
        -webkit-filter: saturate(3);
      }

      .card{
        width:90%;
        margin:10px;
        padding:35px;
        margin-left:21px;
        margin-top:65px;
        border-radius:20px;
      }

      .il1{
        border-radius:23px;
        border:none;
      }

      .elizo{
        border-radius:23px;
      }

      .vliz{
        text-align:center;
            margin:auto;
            display:flex;
            height:27px;
           
      }
  </style>
@endsection

 

@section('content')

 @include('projet.mood3')

<div class="container" id="supox">
            
          <div class="content">
                  <div class="row">
                          <form method="GET">
                                @foreach($chat_prof as $item)
                        
                          @if(($item->decript_prof =! NULL) && ($item->decript_prof == session('profo')[0]->id))

                          <div class="card su_reponx " id="{{$item->id}}" style="background:linear-gradient(-100deg, rgb(218, 247, 166))">
                                          <div><img src="{{asset('logou/log4.png')}}"></div>

                                          @if($item->id_user =! null)
                                          <span style="background:linear-gradient(-100deg, rgb(218, 247, 166),rgb(1, 16, 22))">{{$item->user->name}} </span>


                                          @endif
                                                     <p style="  background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);">{{$item->message}} </p>
                                                          <p style="text-align:right; background:linear-gradient(-100deg, #1bffff,rgb(1, 16, 22));">{{$item->created_at}} </p>
                              
                          
                                <div id="su_t"></div>
                          </div>


                              @else

                              <div class="card su_reponx " id="{{$item->id}}">
                                          <div><img src="{{asset('logou/log4.png')}}"></div>

                                          @if($item->id_user =! null)
                                          <span style="background:linear-gradient(-100deg, rgb(218, 247, 166),rgb(1, 16, 22))">{{$item->user->name}} </span>


                                          @endif
                                                     <p style="  background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);">{{$item->message}} </p>
                                                          <p style="text-align:right; background:linear-gradient(-100deg, #1bffff,rgb(1, 16, 22));">{{$item->created_at}} </p>
                              
                          
                                <div id="su_t"></div>
                          </div>
                          @endif
                        
                                 <input type="hidden" id="id_lien">
                                 <input type="hidden" id="salv">


                                



                                 @endforeach

                               
                          </form>        
                    </div> 
                      
             </div>
                             

    
         
 </div>
     
 <div id="rendero">
      <br>

          <div class="row">
                   <form method="GET" id="sti">
                           <div class="col-12">
                               <div class="group-control">

                                   <textarea  class="form-control il1 vider" name="message" placeholder="Digite o seu comentario..." style="border-radius:50px; background:linear-gradient(-100deg,rgb(11, 14, 15), #1d1b31);width:80%;margin-left:40px;color:rgb(218, 247, 166)"></textarea>
                                
                              </div>
                               <br>
                           </div>

                          
                          <div class="group-control">

                                 <button type="button" class="btn btn-primary" style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="add_comment()" id="odox" >Comentar</button>
                          </div>
                   </form>

                  </div>
 
      </div>
    
   @section('scripts')
   
         <script>
              var id, mess,id_a,mess_a,ripo; 
                  $(function(){
                    $("#fam").hide() ;
                  })

                  $(".reponxi").on('keyup',function(){
                     // alert('okk')
                    id = $(this).attr('id');
                    mess = $(this).val();
                    //charger
                    $("#id_lien").val(id);
                    $("#salv").val(mess);
                   
                   
                    // console.log(id);
                    //  console.log(mess);

               

                  })

                
          function ekox(){
                   id_a =  $("#id_lien").val();
                  mess_a = $("#salv").val();
                   
                  console.log($("#id_lien").val());
                 // console.log(mess_a);
                 $.ajax({
                   type : "get",
                   url : "{{url('projet/store_comment')}}",
                   data : {
                    id_a : $("#id_lien").val(),
                     mess_a : $("#salv").val(),
                   },

                    success:function(response){
                        if(response.status == 200){
                         
                 

                     $("#id_lien").val("");
                     $("#salv").val("");
                     
                    // alert('merci')
                    var elei = $(".fmo").text();
                    console.log('sous commentaire enregistré avec success')
                    $(".reponxi").val("");
                   // alert(elei)
                    // console.log($(".fmo").text());
                  //  $(".fmo").hide();
                  // $(".fmo").val(elei);
                   //  $(".mof").val(elei);
                    
                   
                    
                  }

                        if(response.status == 300){
                          alert('error tcho');
                        }
                    }
                 })



           }


         </script>
         
     
     <script>
      /*  $(document).ready( function(){
           $(".eolo").on("click",function(){
           // const ddd = document.querySelector(".su_reponx").id;
            alert('okkk')
           })
         
        })*/
     </script>

 
    
             
   @endsection 
@endsection