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
        box-shadow: 0 25px 25px rgba(4, 60, 70, 0.885);


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
  </style>
@endsection

@section('content')

<div class="container" id="containa">
    <div class="content">
        <div class="row">
         
            <div class="card">
                       <p class="p1"><h1 style="color:chartreuse;text-align:center;font-family:Matura MT Script Capitals">Hello !!</h1></p>
                       <p class="p1"><h2 style="color:beige;font-family:aharoni">My name is Manu_Rob,I will help you find a solution to your concern 🐼!!</h2></p>
                       <p><span style="font-family:Helvetica"><h3 style="text-align: center" class="spam1">What is your question about?</h3></span></p>
             
                       <div class="part1">
                            <button type="button" class="btn btn-primary conto bottompage" style="background-color: crimson;border:none;border-radius:7px">My account</button>
                                <button type="button" class="btn btn-primary bottompage" style="background-color: rgb(20, 100, 220);border:none;border-radius:7px">Information about our platform</button> 
                                <button type="button" class="btn btn-primary bottompage" style="background-color: rgb(7, 68, 58);border:none;border-radius:7px">Other</button> 
                                    <button type="button" class="btn btn-primary bottompage" style="background-color:chartreuse;border:none;border-radius:7px">Information about our platform</button>
                                         <button type="button" class="btn btn-primary bottompage" style="background-color:black;border:none;border-radius:7px">Other</button>
                                              <button type="button" class="btn btn-primary bottompage" style="background-color:darkturquoise;border:none;border-radius:7px">Information about our platform</button><br>
                                              <button type="button" class="btn btn-primary bottompage  mt-4" style="background-color:deeppink;border:none;border-radius:7px">Repayment</button><br><br> 
                       </div>
                                       <spam class="reto_conto1"></spam><br>
                                       <spam class="reto_conto2"></spam><br>
                                       <spam class="reto_conto3"></spam><br>
                                       <spam class="reto_conto4"></spam>
                                       <spam class="reto_conto5"></spam>
                                       <spam class="reto_conto6"></spam>
                                       <spam class="reto_conto7"></spam>

                
                
        </div>
    </div>
</div>
    
    
   @section('scripts')
      <script>
           $(function(){
              $(".conto").on("click",function(){
                     document.getElementsByClassName("reto_conto1")[0].innerHTML = "<p><marquee><h2 style=' color:darkturquoise;font-family:Times New Roman'>Ah I understand, don't worry, I'll help you. What's your question?!!🐼</h2></marquee><br><div><button class='btn btn-primary  ligaçao1 msg_cont1' id='bottompage1' style='background-color:black' onclick='motiv1()'>I want to create another account</button>  <button class='btn btn-primary msg_cont2 ligaçao1 bottompage' style='background-color:green'>I want to delete my account</button>  <button class='btn btn-primary msg_cont3 ligaçao1 bottompage' style='background-color:pink'>I forgot my account</button>  <button class='btn btn-primary msg_cont4 ligaçao1 bottompage'style='background-color:blue'>Change my data</button></div></p>";
              });
           })
      </script>

      <script>
          
                function motiv1(){
                  $(".msg_cont1").on("click",function(){
                // alert('okkk')
                document.getElementsByClassName("reto_conto2")[0].innerHTML = "<p><h2 style=' color:yellow;font-family:Times New Roman;margin-left:63px'>Wow, tell me why please!! 😔</h2><br><div><button class='btn btn-primary msg_motiv1 ligaçao2 bottompage' style='background-color:darkturquoise' onclick='motiv2()'>Without motive</button>  <button class='btn btn-primary msg_motiv2 ligaçao2 bottompage' style='background-color:rgb(116, 7, 7);' onclick='motiv_x()'>I didn't find what I want</button>  <button class='btn btn-primary msg_motiv3 ligaçao2 bottompage' style='background-color:rgb(248, 252, 18);color: black' onclick='motiv_y()'>I'm not interested anymore</button>  <button class='btn btn-primary msg_motiv4 ligaçao2 bottompage'style='background-color:rgb(4, 36, 66)' onclick='motiv_z()'>Others</button></div></p>"
                
               // var element = getElementsByClassName("msg_cont1")[0];
                //element.scrollTop = element.scrollHeight - element.clientHeight;
                 });
                }
          
      </script>

           <script>
            
             function motiv2(){
              $(".msg_motiv1").on("click",function(){
                  document.getElementsByClassName("reto_conto3")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao3 bottompage' style='font-family:Berlin Sans FB;color: rgb(116, 119, 119);font-size:1.5rem'>Jeez My friend!!, for no reason it would be very difficult for me to help you😔. For that kind of desire, you need to have a reason!!<br> <p style='color:blue'>Or do you want to speak with an agent?</p> <button type='button' class='btn btn-success fala bottompage' onclick='agent1()'>YES</button> <button type='button' class='btn btn-danger nao_fala bottompage mt-2'  onclick='nao_fal()'>NO</button></div></p><br>"
              });
             }
           
           </script>

           <script>
             function agent1(){
               $(".fala").on("click",function(){
                document.getElementsByClassName("reto_conto4")[0].innerHTML = "<p><button type='button' class='btn btn-info ligaçao4 bottompage' style='font-family:Berlin Sans FB'>Congratulations dear, you did very well,<br>it was a pleasure to help you in any way😃, I have already forwarded your situation to our agent<br>They will answer you soon . . . . . . . . .</button></p>"

               });
             }
           </script>

        <script>
              function nao_fal(){
                $(".nao_fala").on("click",function(){
                 document.getElementsByClassName("reto_conto4")[0].innerHTML = "<p><button type='button' class='btn btn-info  bottompage' style='font-family:Berlin Sans FB'>Wow, dear unfortunately I won't be able to help you this time, until next time. . . . 😃</button></p>"

    });
  }
</script>

<script>
            
  function motiv_x(){
   $(".msg_motiv2").on("click",function(){
       document.getElementsByClassName("reto_conto3")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao3 bottompage' style='font-family:Berlin Sans FB;color: rgb(116, 119, 119);font-size:1.5rem'>Wow, I was very surprised that you couldn't find what you wanted!!, but don't worry, I have more cool news for you 😃!! I am absolutely certain that you will be delighted!! . . . Just click on this link <a href='http://ecomercez.infinityfreeapp.com/'>News😮</a></div></p><br>"
   });
  }

</script>

 
<script>
function motiv_y(){
  $(".msg_motiv3").on("click",function(){
      document.getElementsByClassName("reto_conto3")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao3 bottompage' style='font-family:Berlin Sans FB;color: rgb(116, 119, 119);font-size:1.5rem'>That's right dear, as stated in our privacy law, when the customer decides to delete or change accounts after creating his account on our platform, he will have to send the request and after this step, he will wait at most 3 months while the management responsible for these situations can carry out your order safely!! I hope I helped you in any way?? now I'm forwarding your request to our agents... now it's just a matter of waiting. . . 💞<br> And another thing, don't forget to come back and tell me the news my friend😂</a></div></p><br>"
  });
 }

</script>

<script>
  function motiv_z(){
    $(".msg_motiv4").on("click",function(){
        document.getElementsByClassName("reto_conto3")[0].innerHTML = "<p><h3 style='font-family:Times New Roman;color:rgb(116, 119, 119)'>Hello my dear beloved!! Don't worry, there's a solution for epxverything!! tell me what brought you to me to stop our our friendship .....Do you want to speak with an agent in ?♣</h3></p> <br><div> <button type='button' class='btn btn-info into bottompage' onclick='keyupx()'>Send</button> <label style='font-family:Matura MT Script Capitals;color:chartreuse' >Tell me!!</label><textarea class='float-end inpo' style='height:60px'></textarea></div>"
    
      
      });
   }
  
  </script>

  <script>
       function keyupx(){
            $(".into").on("click",function(){
                  //alert('okkkk')
                  let oxax = $(".inpo").val();
                  console.log(oxax);
                  var take = oxax.indexOf("agente");
                  var take2 = oxax.indexOf(" falar com agente");
                  var take3 = oxax.indexOf("sim");
                  var take4 = oxax.indexOf("conversar agente");
                  var take5 = oxax.indexOf("sim conversar com um agente");
                  var take6 = oxax.indexOf("sim falar com um agente");
                  var take7 = oxax.indexOf("sim quero");
                  var take8 = oxax.indexOf("sim eu quero");
                    if((take != -1) || (take2 != -1) || (take3 != -1)|| (take4 != -1) || (take5 != -1) || (take6 != -1) || (take7 != -1) || (take8 != -1)){
                   let fof= document.getElementsByClassName("reto_conto5")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao6' style='font-family:Berlin Sans FB;font-size:1.5rem;color:chartreuse'>Congratulations dear, you did very well,<br>it was a pleasure to help you in any way😃, I have already forwarded your situation to our agent<br>They will answer you soon . . . . . . . . .</div></p><br>"
                    
                     
                  }else{
                    document.getElementsByClassName("reto_conto5")[0].innerHTML = "<p><h3 style='font-family:Times New Roman;color:rgb(116, 119, 119)'>Wow I don't understand, help me understand please 😔♣</h3></p> <br><div> <button type='button' class='btn btn-info into2' onclick='keyupy()'>Send</button> <label style='font-family:Matura MT Script Capitals;color:chartreuse' >Tell me!!</label><textarea class='float-end inpo2' style='height:60px'></textarea></div>"
                       
                  }
            });
       }
  </script>

<script>
  function keyupy(){
       $(document).on("click",'.into2',function(){
             //alert('okkkk')
             let oxax = $(".inpo2").val();
             console.log(oxax);
             var take = oxax.indexOf("agente");
             var take = oxax.indexOf("agente");
                  var takeb = oxax.indexOf(" falar com agente");
                  var takec = oxax.indexOf("sim");
                  var taked = oxax.indexOf("conversar agente");
                  var takee = oxax.indexOf("sim conversar com um agente");
                  var takef = oxax.indexOf("sim falar com um agente");
                  var takeg = oxax.indexOf("sim quero");
                  var takef = oxax.indexOf("sim  eu quero");
               if((take != -1) || (takeb != -1) || (takec != -1)|| (taked != -1) || (takee != -1) || (takef != -1) || (takeg != -1) || (takef != -1)){
              let fof= document.getElementsByClassName("reto_conto6")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao6' style='font-family:Berlin Sans FB;font-size:1.5rem;color:chartreuse'>Congratulations dear, you did very well,<br>it was a pleasure to help you in any way😃, I have already forwarded your situation to our agent<br>They will answer you soon . . . . . . . . .</div></p><br>"
              
                
             }else{
              let fof= document.getElementsByClassName("reto_conto6")[0].innerHTML = "<p><br><div class='card msg_justif ligaçao6' style='font-family:Berlin Sans FB;font-size:1.5rem;color:deeppink'>Unfortunately I didn't understand 😔!!, But I have already forwarded your situation to our agent<br>They will answer you soon . . . . . . . . .</div></p><br>"
                  
             }
       });
  }
</script>

  <script>
     $(function(){
      keyupx()
      keyupy()
      //document.body.scrollTop = 1000;


   //var element = document.getElementsByClassName("button")[0];
   document.getElementsByClassName("bottompage")[0].addEventListener("click", () => {
 window.scrollTo(0, document.body.scrollHeight);
})


     });
  </script>
    
   
             
   @endsection 
@endsection