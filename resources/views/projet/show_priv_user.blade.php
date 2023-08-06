@extends('projet.papa')

@section('css')
@endsection

@section('contento')

@include('projet.mood3')
<div class="row">
                <div class="col-12" >
                        <div class="card" style="width:80%;background:linear-gradient(-100deg,rgb(1, 16, 22));" >
                            
                              <div class="lis"><marquee><b style="font-family:Broadway;  background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);font-size:3em";>🐦 Lista de Messagens Privadas🐦</b></marquee></div>
                      
                      @foreach($msg_priv as $item)
                
                        @if($item->id_prof != NULL)

             <a href="#"  class="oxiox" id="{{$item->id}}">
                            <div class="online-listex">

                                <div class="onlinex">
                                     <img  src="{{asset('prof/'.$item->prof->photo)}}" >
                                </div>
                      
                               <p>{{$item->prof->name_prof}}</p>
                           </div>
            
            
              </a>

                   @elseif($item->id_user != NULL)


                   <a href="#"  class="oxiox" id="{{$item->id}}">
                                    <div class="online-listex">

                                        <div class="onlinex">
                                            <img  src="{{asset('user/'.$item->user->photo)}}" >
                                        </div>

                                    <p>{{$item->user->name}}</p>
                                </div>


                                </a>

                        @endif

                     @endforeach


                        </div>
                </div>       
 </div> 



 @section('scripts')
 
@endsection
@endsection
