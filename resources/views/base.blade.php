<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>UFC-TWITO</title>
    @yield('css')
    <style>
       .card{
        /* border:10px solid;border-image: radial-gradient(circle farthest-corner at center, rgba(46, 49, 146, 1) 15%, rgba(0, 28, 120, 1) 30%, rgba(0, 8, 94, 1) 45%, rgba(0, 0, 70, 1) 55%, rgba(0, 4, 46, 1) 70%, rgba(0, 1, 25, 1) 85%, rgba(0, 0, 0, 1) 100%) 15% round;*/
       }

       html{
  background:linear-gradient(-80deg,rgb(1, 16, 22), #1bffff);

}

       body{
         background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);
       }

       button{
         background:linear-gradient(-100deg,rgb(1, 16, 22), #1bffff);

       }

       ::placeholder {
   text-align: center; 
   
}
    </style>
</head>
<body>
@include('projet.mode2')

       
        @yield('content')
       
        
       
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      @yield('scripts')
    
       <script>
        //sto
           function add_user(){
            var regex = /@alu.ufc\.br$/;
           var ema =  $("#emol").val();
         //  console.log(ema)
            var gmail = regex.test(ema);
             
            if(gmail == true){
               var formdata = new FormData($("#sto")[0]);
              $.ajaxSetup({
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              $.ajax({
                type:"post",
                url:"{{url('etudiant/add_user')}}",
                data:formdata,
                processData:false,
                contentType:false,
                success:function(response){
                  if(response.status == 200){
                     console.log('okkk');
                     window.location.href="{{url('user/user_securite')}}";
                  }

                  if(response.status == 600){
                     console.log('600');
                  }

                  if(response.status == 500){
                     console.log('500');
                  }

                  if(response.status == 400){
                     console.log('400');
                  }

                  if(response.status == 300){
                    window.location.href="{{url('user/user_securite')}}";
                  }

                 
                }
              })
            }else{
               alert('Por favor, certififique-se de informar o email institutional da UFC e tenta novamente');
            }

              
           }
       </script>

<script>
             function security_user(){
               $.ajax({
                  type  : "get",
                  url : "{{url('user/verification_security')}}",
                  data : {
                      email : $(".email").val(),
                      matricula : $(".matricula").val(),
                      code_securite : $(".code_securite").val(),
                  },
                  success:function(response){
                     console.log(response)
                      if(response.status == 200){
                         console.log('okk')
                         destroy_session_user_pre();
                         window.location.href="{{url('projet/home_original')}}";
                        
                         
                      }

                      if(response.status == 300){
                   alert('preeche')
               }


               if(response.status == 100){
                 alert('negado')
        }
            }
               })
             }
       </script>


   <script>
    function login_user(){
     
              var formdata = new FormData($("#sti")[0]);
              $.ajaxSetup({
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              $.ajax({
                type:"post",
                url:"{{url('user/login_user')}}",
                data:formdata,
                processData:false,
                contentType:false,
                success:function(response){
                  if(response.status == 200){
                     console.log('okkk');
                     window.location.href="{{url('user/user_securite')}}";
                  }

                  
                  if(response.status == 100){
                     console.log('100');
                  }

                  if(response.status == 300){
                     console.log('300')
                  }

                 
                }
              })
           }
      
   </script>
 
 <script>
    function add_ufc(){
     
              var formdata = new FormData($("#stx")[0]);
              $.ajaxSetup({
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              $.ajax({
                type:"post",
                url:"{{url('ufc/store')}}",
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
            function add_prof(){
               var formdata = new FormData($("#sty")[0]);
              $.ajaxSetup({
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              $.ajax({
                type:"post",
                url:"{{url('prof/add_prof')}}",
                data:formdata,
                processData:false,
                contentType:false,
                success:function(response){
                  if(response.status == 200){
                     console.log('okkk');
                     window.location.href="{{url('prof/create_security')}}";
                  }

                  if(response.status == 600){
                     console.log('600');
                  }

                  if(response.status == 500){
                     console.log('500');
                  }

                  if(response.status == 400){
                     console.log('400');
                  }

                  if(response.status == 300){
                   // window.location.href="{{url('user/user_securite')}}";
                  }

                 
                }
              })
            }
      </script>

<script>
             function security_prof(){
               $.ajax({
                  type  : "get",
                  url : "{{url('prof/verification_security_prof')}}",
                  data : {
                      email_prof : $(".email_prof").val(),
                      password1 : $(".password").val(),
                      securty_code : $(".securty_code").val(),
                  },
                  success:function(response){
                     console.log(response)
                      if(response.status == 200){
                         console.log('okk');
                         destroy_session_prof_pre();
                         window.location.href="{{url('projet/home_original')}}";
                      }

                      if(response.status == 300){
                   alert('preeche')
               }


               if(response.status == 100){
                 alert('negado')
        }
            }
               })
             }
       </script>

        <script>
            function login_prof(){
     
     var formdata = new FormData($("#stl")[0]);
     $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
     $.ajax({
       type:"post",
       url:"{{url('prof/login_prof')}}",
       data:formdata,
       processData:false,
       contentType:false,
       success:function(response){
         if(response.status == 200){
            console.log('okkk');
            window.location.href="{{url('prof/create_security')}}";
         }

         
         if(response.status == 100){
            console.log('100');
         }

         if(response.status == 300){
            console.log('300')
         }

        
       }
     })
  }

        </script>


  <script>
      function destroy_session_user_pre(){
         $.ajax({
            type : "get",
            url : "{{url('session/destroy_session_user_pre')}}",
            success:function(response){
               console.log('etudiant tué');
            }
         })
      }
  </script>

  <script>
  function destroy_session_user_post(){
         $.ajax({
            type : "get",
            url : "{{url('session/destroy_session_user_post')}}",
            success:function(response){
               console.log('etudiant deconnecté');

              // window.location.href="{{url('/')}}";
            }
         })
      }

  </script>

  <script>
    function destroy_session_user_pre(){
         $.ajax({
            type : "get",
            url : "{{url('session/destroy_session_user_pre')}}",
            success:function(response){
               console.log('etudiant tué');
            }
         })
      }
  </script>

  <script>
    
                        
  function destroy_session_prof_pre(){
         $.ajax({
            type : "get",
            url : "{{url('session/destroy_session_prof_pre')}}",
            success:function(response){
               console.log('prof tué');

            }
         })
      }
  </script>

  <script>
   function destroy_session_prof_post(){
         $.ajax({
            type : "get",
            url : "{{url('session/destroy_session_prof_post')}}",
            success:function(response){
               console.log('prof deconnecté');

              // window.location.href="{{url('/')}}";
            }
         })
      }
  </script>






 

</body>
</html>