<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @yield('css')
  <style>
    @include('projet.style');
    
  </style>
    
   </head>
  
   @include('projet.mode1')
   
   
<body>

@include('menu')
  <div class="sidebar close">
  
    <div class="logo-details">
      <i class='hom' style="font-size:2em">🐦</i>
      <span class="logo_name" style=" background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff)">UFC-TWITO</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{url('projet/home_original')}}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{url('projet/publication')}}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Postar</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
       
          @if(session('profo'))
          <li><a href="{{url('projet/message_priv_show')}}">Privado</a></li>
              @elseif(session('info'))
              <li><a href="{{url('projet/message_priv_show_user')}}">Privado</a></li>

          @endif
      
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">PHP & MySQL</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Postagens</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

             
            @if(session('info'))
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Lista Postagens</a></li>
                <li><a href="{{url('projet/imagex/'.session('info')[0]->id)}}">Imagem</a></li>
                <li><a href="#">Video</a></li>
              </ul>
            @elseif(session('profo'))
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Lista Postagens</a></li>
                <li><a href="{{url('projet/imagex/'.session('profo')[0]->id)}}">Imagem</a></li>
                <li><a href="#">Video</a></li>
              </ul>

            @endif
          
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
       
        @if(session('info'))

          @php
            $uz = 0;
            $uz = session('info')[0]->id

          @endphp

        <a href="{{url('projet/message_priv_show_user')}}">
          <i class='bx bx-compass' ></i>
          <span class="link_name"><strong style="background:linear-gradient(-80deg,rgb(1, 16, 22), #1bffff);">{{session('info')[0]->count_msg_user}} </strong> Message(s)</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{url('projet/message_priv_show_user')}}"><strong style="background:linear-gradient(-80deg,rgb(1, 16, 22), #1bffff);">{{session('info')[0]->count_msg_user}} </strong> Message(s)</a></li>
        </ul>
      </li>

        @elseif(session('profo'))
         
            <a href="{{url('projet/message_priv_show')}}">
              <i class='bx bx-compass' ></i>
              <span class="link_name"><strong style="background:linear-gradient(-80deg,rgb(1, 16, 22), #1bffff);">{{session('profo')[0]->count_msg_prof}}</strong> Message (s)</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{url('projet/message_priv_show')}}"><strong style="background:linear-gradient(-80deg,rgb(1, 16, 22), #1bffff);">{{session('profo')[0]->count_msg_prof}}</strong> Message(s)</a></li>
            </ul>
          </li>

        @endif






      @if(session('profo'))
      <li>
        <a href="{{url('video/conference/'.session('profo')[0]->id)}}">
          <i class='bx bx-history'></i>
          <span class="link_name">Video-Conferencia</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{url('video/conference/'.session('profo')[0]->id)}}">Video-Conferencia</a></li>
        </ul>
      </li>
     @endif 



       @if(session('info'))

       <li class="perfo" value="{{session('info')[0]->id}}">
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name ">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="#" class="link_name">Perfil</a></li>
        </ul>
      </li>

       @elseif(session('profo'))
       <li class="perfo" value="{{session('profo')[0]->id}}">
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name ">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="#" class="link_name">Perfil</a></li>
        </ul>
      </li>
 
       @endif

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      @if(session('info'))

      <div class="name-job">
              <div class="profile_name" style="background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff)">{{session('info')[0]->name}}</div>
              <div class="job">Conectado</div>
            </div>

         @elseif(session('profo'))

         <div class="name-job">
              <div class="profile_name" style="background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff)">{{session('profo')[0]->name_prof}}</div>
              <div class="job">Conectado</div>
            </div>

            @else
            
            <div class="name-job">
              <div class="profile_name"><a href="{{url('user/for_login_user')}}">Login Estudante</a></div>
              <div class="profile_name"><a href="{{url('prof/create_prof_log')}}">Login Professor</a></div>
            </div>
      @endif


      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text" style="font-family:Broadway;background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff)">WELCOME TO UFC-TWITO🐦</span>
      <strong class="call_user" style="margin-left:initial"></strong>

    </div>
    <br>
    
     @yield('contento')
       
  </section>

  
 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   @yield('scripts')


  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>

  <script>
     function add_publication(){
      
     var formdata = new FormData($("#stul")[0]);
     $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
     $.ajax({
       type:"post",
       url:"{{url('projet/add_publication')}}",
       data:formdata,
       processData:false,
       contentType:false,
       success:function(response){
         if(response.status == 200){
            console.log('okkk');
            //window.location.href="{{url('user/user_securite')}}";
         }

        
         if(response.status == 300){
            console.log('300')
         }

        
       }
     })
  }

  </script>

 <script>

   $(function(){
     $(".hom").on("click",function(){
      window.location.href="{{url('projet/home_original')}}";
     
     })
   })
 </script>


   <script>
      function show_home_original(){
        $.get("{{url('projet/home')}}",{},function(data){
          //console.log(data);
           $("#home_original").html(data);

         })
      }

   </script>

   <script>
          $(function(){
            show_home_original()
            
          })

   </script>


   <script>
        $(function(){
          var profile;
           $(".perfo").on("click",function(){
           profile =  $(this).val();
            window.location.href="{{url('projet/perfil')}}/"+profile;
           })
        })
   </script>

  
<script>

function edit_user(id){
    var formdata = new FormData($("#ediat")[0]);
    $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
      type : "post",
      url : "{{url('projet/edit_user')}}/"+id,
     data : formdata,
     processData : false,
     contentType : false,
     success:function(response){
      console.log('okkkk')
      $(".vidage").val("");
     }
    })

    
    }

</script>


<script>

function edit_prof(id){
    var formdata = new FormData($("#ediat_prof")[0]);
    $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
      type : "post",
      url : "{{url('projet/edit_prof')}}/"+id,
     data : formdata,
     processData : false,
     contentType : false,
     success:function(response){
      console.log('merci lo')
      $(".vidage").val("");
     }
    })

    
    }

</script>

<script>
     /*  $(document).on('keyup','#search1',function(){
       var recup1 = $(this).val();
       //console.log(recup1);
       $.ajax({
         type: "get",
         url : "{{url('projet/search1')}}",
         data : {
          search1 : $(this).val(),
         },
         success:function(response){
          //console.log(response)
          res = response;
         console.log(res);
        res.forEach(function(element){
        console.log(element);
  
        });
         }
       })

   })*/

 </script>



  <script>
         $(document).on('keyup','#search1',function(){
       var recup1 = $(this).val();
       //console.log(recup1);

       if(recup1){
                $.post("{{route('projet/search1')}}",{search1:recup1},(data)=>{
					 console.log(data)
					var _html='';
         
          //alert(dil)
					data.forEach(element=>{
            _html+=`<a href='{{url('projet/profil_inta/${element.id}')}}' >
                            <div class="online-liste">

                                <div class="online">
                                      <img src="{{asset('prof')}}/${element.photo}">
                                </div>
                      
                               <p>${element.name_prof}</p>
                           </div>
            
            
            </a>`;						
					})
                  $('.dov').html(_html);
					
                })

              }

            })    
              
  </script>


<script>
    $(document).on('keyup','#search2',function(){
        recup2 = $(this).val();
       //console.log(recup1);

       if(recup2){
                $.post("{{route('projet/search2')}}",{search1:recup2},(data)=>{
					 console.log(data)
					var _html='';
         
          //alert(dil)
					data.forEach(element=>{
            _html+=`<a href='{{url('projet/profil_inta2/${element.id}')}}' >
                            <div class="online-liste">

                                <div class="online">
                                      <img src="{{asset('User')}}/${element.photo}">
                                </div>
                      
                               <p>${element.name}</p>
                           </div>
            
            
            </a>`;
						
					})
                  $('.dov').html(_html);
					
                })

              }

            })
              
  </script>

         <script>
            $(function(){
                $("#privox").on('click',function(){
                   var priv = $(this).val();
                    $.get('{{url('projet/msg_priv')}}/'+priv,{},function(data){
                      $("#lox1").html(data);
                      $("#general1").show();
                    })


                  //window.location.href="{{url('projet/msg_priv')}}/"+priv;
                })
            })
         </script>


     
<script>
            $(function(){
                $("#privaax").on('click',function(){
                   var priv = $(this).val();
                   $.get('{{url('projet/msg_priv2')}}/'+priv,{},function(data){
                      $("#lox1").html(data);
                      $("#general1").show();
                    })
                  // alert(priv)
                  //window.location.href="{{url('projet/msg_priv2')}}/"+priv;
                })
            })
         </script>

    
    <script>
      /*  $(function(){
          var id_privado;
            $(".oxiox").on('click',function(){
              id_privado = $(this).attr('id');
               $.ajax({
                 type:"get",
                 url : "{{url('projet/chat_priv_prof')}}",
                 data : {
                  id_privado : id_privado,
                 },
                 success:function(response){
                      

                  response.forEach(element=>{
            _html+=`<p >
                       
             ksksksksksks
            </p>`;
						
					})

            $("#lox3").html();










                 }
               })
              
              //alert(id_privado)
            })
        })*/
    </script>



     <script>


        $(function(){ 
           var id_privado
           $(".oxiox").on("click",function(){
              
            id_privado = $(this).attr('id');
           // console.log(id_privado)

           $.get('{{url('projet/chat_priv_prof')}}/'+id_privado,{},function(data){

            $("#lox3").html(data);
            $("#general3").modal("show");
                  //console.log(data)
              });

           })
        })


     </script>


</body>
</html>


 
                       