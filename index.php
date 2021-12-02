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
    <form action="savesettings.php" method="POST">
    
        <input type="hidden"  id = "submit" name="score" value=""></input>
        
    </form>
    <!--<script type="module" src="./game.js">
    //</script>-->
    <script type="module" src="./game.js"></script>
  </body>


</html>
