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

<div class="container" id="containa">
    <div class="content">
        <div class="row">
         
            <div class="card">
                <div><img src="{{asset('logou/log4.png')}}"></div>
                       <p class="p1"><h1 style="color:chartreuse;text-align:center;font-family:Broadway" class="imo1">  <span class="nio">🐦</span>Welcome to UFC-TWITO 🐦</h1></p>
                       <p class="p1"><h2 style="color:beige;font-family:Broadway;text-align:center">Secutity Code</h2></p>
             
                 <form method="POST" id="sta">
                      

                             <div class="row">
                            
                              <div class="col-12">
                                  <div class="group-control">
                                      <input type="text" class="form-control il1 securty_code mt-2" name="securty_code" placeholder="Your security code sended to your mail">
                                  </div>
                                  <input type="hidden" class="form-control il2 email_prof mt-2" name="email_prof" value="{{session('info_prof')[0]->email_prof}}">
                                  <input type="hidden" class="form-control il3 password mt-2" name="password1" value="{{session('info_prof')[0]->password}}">

                              </div>

                             

                             </div><br>

                                  


                              <div class="group-control">
                                     <button type="button" class="btn btn-primary " style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="security_prof()">Sign-Up</button>
                              </div>
   
                </div> 
                 </form>
                       
           </div>
                                     

                
                
        </div>
    </div>
    
</div>
    
    
   @section('scripts')
   
    
   
             
   @endsection 
@endsection