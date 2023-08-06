@extends('projet.papa')

@section('css')
@endsection

@section('contento')

<div class="row">
    
   <div class="col-11">
        
   <br>
           <div class="card">
           
                        
                          <div>
                           
                            <label class="seguir" id="{{$perfil->id}}" style="margin-left:22px;margin-top:-10%;color:#08047A;background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-family:aharoni">     <img src="{{asset('prof/'.$perfil->photo)}}" class="imgx" style="margin-left:150px"></label>
                        
                        </div>
                         
                      
                         <div>

                             <h2 style="text-align:center;color:rgb(218, 247, 166);background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);"><img src="{{asset('logou/log4.png')}}" ></h2>   

                         </div>

                         
                         <div>

                            <h2 style="text-align:center;color:rgb(6, 66, 66);background:linear-gradient(-100deg,rgb(1, 16, 22), #fff);"><marquee style="font-family:Broadway">PERFIL</marquee></h2>   

                         </div>   
                       

                 
                 <form method="POST" id="ediat_prof">
              
                    <div class="row">
                       
                          <div class="col-6">
                                <br>
                               <div class="group-control">

                                         <input type="text" class="form-control vidage" name="email_prof" value="{{$perfil->email_prof}}"  readonly=""/>

                               </div>

                          </div>


                        



                          <div class="col-6">
                                <br>
                               <div class="group-control vidage">

                                         <input type="text" class="form-control vidage" name="name_prof" value="{{$perfil->name_prof}}" />

                               </div>

                          </div>


                          <div class="col-6">
                                <br>
                               <div class="group-control vidage">

                                         <textarea type="text" class="form-control vidage" name="bio" >{{$perfil->bio}}</textarea>

                               </div>

                          </div>




                          <div class="col-6">
                                <br>
                               <div class="group-control vidage">

                                         <input type="file" class="form-control vidage" name="photo" />

                               </div>

                          </div>

                    
                    

                      <div class="col-12">
                      <br>
                          <p style="font-family:Broadway;text-align:center;background:linear-gradient(-100deg,rgb(1, 16, 22), #fff)"><strong class="eya" style="font-family:Broadway">Choose the University</strong></p>

                      </div>
                    <div class="col-12">

                         <select id="ufc" class="form-control vidage elizo border:none" name="id_ufc">
                           @foreach($ufc as $item)
                                <option class="form-control vidage elizo" value="{{$item->id}}">{{$item->name_ufc}}</option>
                    
                           @endforeach
                        </select>
                      <br>

                    </div>


                   <br>

                    <div class="col-12">
                            
                            <div class="group-control">
                                    <button type="button" class="btn btn-primary " style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="edit_prof({{$perfil->id}})">Edit</button>
                            </div>
                        
                    
                    </div>
                 </form>

</div>
@section('scripts')
@endsection
@endsection
