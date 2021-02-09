<?php 
session_start();
include('../controller/logic.php');

// if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['calc'];
  $viewer = new calc($num1,$num2,$op);
// echo $op;
// }
 $move =  $viewer->compute();
echo $move;
   $_SESSION['carry'] = $move;
  header('location: ../view/index.php ');

   //  echo $_SESSION['carry'] ;
 //echo $op;


