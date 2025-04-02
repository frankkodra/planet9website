<?php
include("products.php");
include("dbh.inc.php");
include("updateDataBase.php");
session_start();
$quantityToRemove = $_POST["QuantityToRemove"];
$productName = $_POST["productName"]; 
$wholesale = str_contains($productName,"Wholesale");
if(!isset($_SESSION["cart"][$productName])){
    echo"product is not in the cart";
    exit();
 }
if($quantityToRemove =="all"){
  unset(  $_SESSION["cart"][$productName]);
  updateDataBaseCart() ;
  exit();
}
 $quantityToRemove= intval($quantityToRemove);
//echo"value to remove ".$quantityToRemove." qaunity in cart ".$_SESSION["cart"][$productName]['quantity']."  ";

 if( $_SESSION["cart"][$productName]['quantity']-$quantityToRemove<1){
    unset(  $_SESSION["cart"][$productName]);
    updateDataBaseCart();
    echo "".$_SESSION['cart'];
    exit();
 }

 $_SESSION['cart'][$productName]['quantity'] = $_SESSION['cart'][$productName]['quantity']-$quantityToRemove;
 updateDataBaseCart();
//echo $_SESSION["cart"][$productName]['quantity'];

 


 echo $Products[str_replace(" Wholesale","",$productName)][($wholesale?'WholesalePrice':'RetailPrice')];