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

      .eya{
        background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);
      }

  </style>
@endsection

@section('content')

<div class="container" id="containa">
    <div class="content">
        <div class="row">
         
            <div class="card">
                <div><img src="{{asset('logou/log4.png')}}"></div>
                       <p class="p1"><h1 style="color:chartreuse;text-align:center;font-family:Broadway" class="imo1">Welcome to UFC-TWITO !!</h1></p>
                       <p class="p1"><h2 style="color:beige;font-family:Broadway;text-align:center">Sign-Up</h2></p>
             

                 <form method="POST" id="sto">
                      

                             <div class="row">
                             <div class="col-6">
                                  <div class="group-control">
                                      <input type="text" class="form-control il1 mt-2" name="name" placeholder="Your name">
                                  </div>

                              </div>

                              <div class="col-6">
                                  <div class="group-control">
                                      <input type="text" class="form-control il1 mt-2" name="email"  pattern="[A-Za-z0-9._%+-]+@alu.ufc.br"   placeholder="Your email : xxxxxx@alu.ufc.br" required="required" id="emol">
                                  </div>

                              </div>

                              <div class="col-6">
                                  <div class="group-control">
                                      <input type="number" class="form-control il1 mt-2" name="matricula" placeholder="Your matricule">
                                  </div>

                              </div>

                              <div class="col-6">
                                  <div class="group-control">
                                      <input type="file" class="form-control il1 mt-2" name="photo">
                                  </div>

                              </div>
                              <div class="col-12">
                                  <div class="group-control">
                                      <input type="string" class="form-control il1 mt-2" name="curso" placeholder="Your especiality">
                                  </div>

                              </div>

                             </div><br>

                                   <p style="font-family:Broadway;text-align:center"><strong class="eya">Choose the University</strong></p>
 
                                   <div class="col-12">

                                       <select id="ufc" class="form-control elizo border:none" name="id_ufc">
                                       @foreach($ufc as $item)
                                         <option class="form-control elizo" value="{{$item->id}}">{{$item->name_ufc}}</option>
                                    
                                     @endforeach
                                       </select>
                                 <br>

                              </div>


                              <div class="group-control">
                                     <button type="button" class="btn btn-primary " style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="add_user()">Sign-Up</button>
                              </div>
                             <strong><a href="{{url('user/for_login_user')}}" style="color:#79C2F2;font-family:Broadway" >Already have an account?</a></trong>
   
                </div> 
                 </form>
                       
           </div>
                                     

                
                
        </div>
    </div>
</div>
    
    
   @section('scripts')
      <script>

      </script>
    
   
             
   @endsection 
@endsection