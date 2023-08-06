<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      
          <div class="container">
            <div class="content">
                <br><br>
                <div class="row">
                    
                    <div class="col-3 bg-info">elo
                        <div class="row">
                            <div class="col-5 bg-dark">vux</div>
                        </div>
                    </div>
                    <div class="col-5">vox
                        <div class="col-4 bg-warning">fin</div>
                    </div>
                    <div class="col-4">lox</div>
                </div>

                <div class="row">
                    
                    <div class="col-3 bg-info">elo
                        <div class="row">
                            <div class="col-5 bg-dark">vux</div>
                        </div>
                    </div>
                    <div class="col-5">vox
                        <div class="col-4 bg-warning">fin</div>
                    </div>
                    <div class="col-4">lox</div>
                </div>
            </div>
          </div>

          <form action="">
            <input type="text"  name="kolxa" value="gom">
          </form>
          <button type="button" onclick="goxan()" class="hilo">gegegeg</button>
    
          <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
 <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
 
  <script>
      
          function goxan(){
            window.jsPDF = window.jspdf.jsPDF;
            $(".hilo").on("click",function(){
                 let gomoz = document.getElementsByClassName("hello")[0];
                 print(gomoz);
                 
                  // console.log(gomoz);
                  let doc = new jsPDF();
                 doc.text(gomoz,10,10);
                 doc.save("vopx.pdf");
               
            });
          }
      
  </script>

  <script>
     $(function(){
         let hooolx = document.getElementsByName("kolxa");
          console.log(hooolx);
     });
  </script>
</body>
</html>


