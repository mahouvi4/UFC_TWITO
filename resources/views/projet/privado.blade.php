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

 

<div class="container" id="supox">
            
          <div class="content">
                  <div class="row">
                        <form method="GET">
                               

                               
                        </form>        
                    </div> 
                      
             </div>
                             

    
         
 </div>
     
 <div id="rendero">
      <br>

          <div class="row">
                   <form method="POST" id="stonex">
                           <div class="col-12">
                                <div class="group-control">

                                    <textarea  class="form-control il1 vider" name="message" placeholder="Digite o seu comentario..." style="border-radius:50px; background:linear-gradient(-100deg,rgb(11, 14, 15), #1d1b31);width:80%;margin-left:40px;color:rgb(218, 247, 166)"></textarea>
                                  
                                </div>
                               <br>
                           </div>

                          
                          <div class="group-control">

                                 <button type="button" class="btn btn-primary" style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="add_comment_priv()" id="odix" >Comentar</button>
                          </div>


                          <input type="hidden" value="{{$priv_receiv_prof->id}}" name="hote_prof" >

                   </form>

                  </div>
 
      </div>
    
   @section('scripts')
   
          <script>

                function add_comment_priv(){
                  var formdata = new FormData($("#stonex")[0]);
                    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                  $.ajax({
                     type:"post",
                     url : "{{url('projet/add_comment_priv')}}",
                     data : formdata,
                     processData:false,
                     contentType:false,
                     success:function(response){
                       alert('okkk')
                     }

                  });
                    
                }


          </script>

                
         

 
    
             
   @endsection 
@endsection