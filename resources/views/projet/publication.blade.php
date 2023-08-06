@extends('projet.papa')

@section('css')
@endsection

@section('contento')


<div class="row">

        
        <div class="col-6">
        <div class="card">
                <div><img src="{{asset('logou/log4.png')}}"></div>
                       <p class="p1"><h1 style="color:chartreuse;text-align:center;font-family:Broadway" class="imo1">  <span class="nio">🐦</span>Welcome to UFC-TWITO 🐦</h1></p>
                       <p class="p1"><h2 style="color:beige;font-family:Broadway;text-align:center">Publication</h2></p>
                       <form method="POST" id="stul">
                 <div class="row">
                        
                
                              <div class="col-6"><span>picture</span>
                                  <div class="group-control">
                                      <input type="file" class="form-control il1 mt-2" name="photo">
                                  </div>

                              </div>

                              <div class="col-6"><span>Video</span>
                                  <div class="group-control">
                                      <input type="file" class="form-control il1 mt-2" name="video">
                                  </div>

                              </div>

                              <div class="col-12">
                                  <div class="group-control">
                                      <textarea class="form-control il1 mt-2" name="description" height="5px" placeholder="description"></textarea>
                                  </div>

                              </div>

                             </div><br>

 
                              <div class="group-control">
                                     <button type="button" class="btn btn-primary " style="border:none;border-radius:20px;width:100%;background-color:#79C2F2" onclick="add_publication()">Sign-Up</button>
                              </div>
   
                </div> 
                 </form>
                
                    </div><br>
                            

                    <div class="col-6">
                    

                 @if(isset($publication))
                   @foreach($publication as $item)
                      @if($item->photo == 0)
                      <div class="card" style="width:80%;height:290px" >

                        <video  height="230" controls>
                        <source src="{{asset('publication/'.$item->video)}}" type="video/mp4"></source>
                      
                        </video>

                        <strong><marquee  style="font-family:Matura MT Script Capitals;color:#ed0a70">🐦{{$item->description}}🐦</marquee></strong>
                        </div>
                      
                      @endif
                      
                 @endforeach
                   @endif

                   
            </div>
                 
                </div> 
                
                   
           </div>
           
      

        </div>
        
        </div>

        
@section('scripts')
@endsection
@endsection
