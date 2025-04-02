<?php
include("dbh.inc.php");
session_start();

  $address = $_POST["address"];

  $sql ="UPDATE accounts SET shipping_addresses =JSON_ARRAY_APPEND(shipping_addresses,'$',?) WHERE email =?";
  $stmt =$conn->prepare($sql);
  
  $stmt->bindparam(1, $address);
  
  $stmt->bindParam(2,$_SESSION['username']);
  if($stmt->execute()){
    echo'succefully added address';
  }
  else{
    echo 'failed to add address';
  }
 