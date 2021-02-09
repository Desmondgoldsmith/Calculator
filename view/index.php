<?php
session_start();
// include('../model/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script type="text/javascript" href="js\bootstrap.min.js"></script>
    <style>
    .container{
        width: 600px;
        height: 500px;
    }
    .answer{
        width: 600px;
    }
    .head{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 30px;
        text-align: center;
        font-weight: bolder;
    }
    </style>
    <title>Dessy Calc</title>
</head>
<body>
    <div class="container bg-warning text-dark">
    <br><br>
    <form action="../model/config.php" form method="POST">
     <div class="head">DESSY'S CALCULATOR APP</div>
     <br>
      <div class="input-group input-group-lg">
  <div class="input-group-prepend">
  
    <span class="input-group-text" id="inputGroup-sizing-lg mt-5">FIRST NUMBER</span>
  </div>
  <input type="text" name="num1" id="num1" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
</div>
<!-- calc -->
<div class="input-group input-group-lg mt-4">
  <div class="input-group-prepend">
  
    <span class="input-group-text" id="inputGroup-sizing-lg mt-5">OPERATOR</span>
  </div>
  <input type="text" name="calc" id="calc" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
</div>
<!-- end calc -->
    <!-- //second num -->
    <div class="form-group">
    <div class="input-group input-group-lg mt-4">
  <div class="input-group-prepend">
  
    <span class="input-group-text" id="inputGroup-sizing-lg">SECOND NUMBER</span>
  </div>    
  <input type="text" name="num2" id="num2" class="form-control" id="exampleInputPassword1"  required>
  </div>
  <br><br>
<!-- //button -->
  <button type="submit"   class="btn btn-secondary btn-lg btn-block" >COMPUTE</button>

    </form>
   </div>
   <br><br>
    <div class="answer bg-dark text-warning mt-5">
    <br><br>
      <h3>ANSWER = <?php echo  $_SESSION['carry']  ?> </h3>
   
    </div>
    <br><br><br>
</body>
</html>