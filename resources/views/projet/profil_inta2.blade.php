@extends('projet.papa')

@section('css')
@endsection

@section('contento')

<div class="row">
    
   <div class="col-11">
        
   <br>
           <div class="card">
           
          
                 <!-- Nav-->
                <header>
                    <nav class="navbar navbar-light nav-top">
                        <div class="container-fluid nav-container">
                            <a class="navbar-brand" href="https://www.instagram.com/brito_michelli/" target="_blank"> 
                                 <img src="{{asset('logou/log4.png')}}" style="width:80px;" />
                            </a>
                            <form class="d-flex">
                            <span class="text" style="font-family:Broadway;background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff)"> UFC-TWITO🐦</span>
                            </form>
                            <div style="width: 30%;">
                                <i class="bi bi-house-door icons"></i>
                                <i class="bi bi-inbox icons"></i>
                                <i class="bi bi-compass icons"></i>
                                <i class="bi bi-heart icons"></i>
                            <img src="{{asset('logou/log4.png')}}" style=" width:80px;" />
                            </div>
                        </div>
                    </nav>
                </header>       

    
  

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-0 col-md-2"></div>
                            <div class="col-12 col-md-8">

                                <!-- Profile-->
                                <div class="container">
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-3">
                                        
                                            <img class="img-profile" src="{{asset('User/'.$prof_inta->photo)}}" style="width:100px;height:100px;border-radius:60px;margin-left:-3px">
                                            
                                        </div>

                                        <div class="col-9">
                                            <button type="button" class="btn btn-outline-secondary button-edit" style="margin-left:58px;margin-top:30px">Seguir</button>
                                            <button type="button" class="btn btn-outline-secondary button-edit " style="margin-left:58px;margin-top:30px" value="{{$prof_inta->id}}" id="privaax">Privado</button>

                                                        
                                        </div>

                                        <div class="row">
                                                <div class="col-12">
                                                <h1 class="name">{{$prof_inta->name}}</h1>
                                                    <p class="profile-desc">Estudante em {{$prof_inta->curso}}</p>
                                                    <h2 class="name">{{$prof_inta->ufc->name_ufc}}</h2>
                                                </div>
                                        </div>

                                        
                                        <div class="col-12">


                                        
                                          
                                            <div class="row">
                                            

                                                <div class="col-4">
                                                    <p class="profile-datas"><strong>194</strong> publicações</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="profile-datas"><strong>5.300</strong> seguidores</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="profile-datas"><strong>667</strong> seguindo</p>
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                

                                        <!-- Stories-->
                                       
                                        @foreach($pub as $item)
                                        @if($item->photo != 0)
                                <div class="ekoyon">
                               
                                        <div class="row">
                                    
                                        <div class="col-12">
                                            <div class="card" style="">
                                                <div > <img src="{{asset('publication1/'.$item->photo)}}" style="width:50%;border-radius:25px"></div>                                                
                                            </div>
                                        </div>
                                           
                                            
                                        </div>

                                        <br><br>  
                                       
                                </div>

                               
                                @endif  
                                @endforeach 
    

                                
                                 <!-- Line-->
                                                <hr size="3" width="100%" color="#EEEEEE" style="margin: 0%;">

                            <!-- Nav-Feed-->
                            <ul class="nav nav-tabs nav-feed" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active nav-link-1" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true"><i class="bi bi-grid-3x3"></i> PUBLICAÇÕES</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link nav-link-2" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false"><i class="bi bi-file-person"></i> MARCADOS</a>
                                </li>
                            </ul>

                            <!-- Card-Feed-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row" style="padding-bottom: 25px;">
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post1.png" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post4.png" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post3.png" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-bottom: 25px;">
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post2.png" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post5.jpg" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post6.jpg" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-bottom: 25px;">
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="images/post7.png" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                            
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                            </div>
                            </div>
                            <div class="col-0 col-md-2"></div>
                            </div>
                            </div>
                                
                </section>
    
     
          </div>


                    

  </div>
</div>
@section('scripts')

<script type="text/javascript">

var crl = document.getElementById('myCrl').getContext('2d');

crl.beginPath();
crl.arc(60, 100, 40, 0, 2 * Math.PI);
crl.fillStyle = '#00ACC1';
crl.fill();
crl.linewidth = 5;
crl.strokeStyle = '#dbdbdb';
crl.stroke();

var crl1 = document.getElementById('myCrl1').getContext('2d');

crl1.beginPath();
crl1.arc(60, 100, 40, 0, 2 * Math.PI);
crl1.fillStyle = '#F8BBD0';
crl1.fill();
crl1.linewidth = 5;
crl1.strokeStyle = '#dbdbdb';
crl1.stroke();

var crl2 = document.getElementById('myCrl2').getContext('2d');

crl2.beginPath();
crl2.arc(60, 100, 40, 0, 2 * Math.PI);
crl2.fillStyle = '#E91E63';
crl2.fill();
crl2.linewidth = 5;
crl2.strokeStyle = '#dbdbdb';
crl2.stroke();

</script>

@endsection
@endsection
