<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastercard run game</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    canvas{
      position: fixed;
      left: 50%;
 /*
      max-width: 80%;
      top: 50%;

      For mobile res
           */
      max-width: 90%;
      max-height: 99%;
      top: 50%;
      

      /*bottom:-50%;*/
      transform: translate(-50%, -50%);
      margin: 0 auto;
    }
  </style>
      </head>
      <body>
      <div id="content">
      <canvas id="mycanvas"></canvas>
      </div>  
    <!--<form action="server.php" method="post">-->
      <form action="/savesettings.php" method="post">
          <input type="hidden" id="myInput" name="country" value = "$score" >
      </form>
    <script type="module" src="./game.js"> 
    </script>

      
    <script>
      let scoreInput = document.getElementById("score");
      let score;

      function scoreboard(){
        score = scoreInput.value;
      if(localStorage.getItem("score")!=null){
        alert("Not Done")
      }
      else{
        if(scoreboard()){
          localStorage.setIteam("score",$score);
          document.getElementById("score-field").style.display="none";
        }
      }
      }
    </script>
    
  </body>


</html>
