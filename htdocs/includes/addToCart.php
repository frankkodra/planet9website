<?php
include("dbh.inc.php");
include("products.php");
session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $quantity = intval($_POST['Quantity']);
    if($quantity<1){
        echo"quanity less than 1";    
        exit();
    }
  
    if(str_contains($productName,"Wholesale")) {
  
        $wholesale = true;
    }
    else{
        $wholesale = false;
    }
    $productId = str_replace("-wholesale","",$productName);
    //checks if the account
   if((!isset($_SESSION['wholesale'])|| !$_SESSION['wholesale'])&&$wholesale){
    echo "you do not have a wholesalers account";
   }

    if (!isset($Products[$productId])) {
        echo "The product does not exist.".str_replace("-wholesale","",$productName);
        exit;
    }    
     if (!$wholesale||isset($_SESSION['cart'][$productName])||$quantity >= $Products[$productId]['WSMoq'])
     {
//do nothing
     }   
     else{//exit
        echo "The quantity is less than the minimum order quantity for wholesale."  ;
        exit;
    }
  

   


    $price = $wholesale ? $Products[$productId]['WholesalePrice'] : $Products[$productId]['RetailPrice'];
   

    if (isset($_SESSION['cart'][$productName])) {
        
        $_SESSION['cart'][$productName]['quantity'] += $quantity;

    } else {
        $_SESSION['cart'][$productName] = array(
            'quantity' => $quantity,
            'price' => $price,
            'wholesale' => $wholesale
        );
    }

    // If the user is logged in, update the cart in the database
    if ( isset($_SESSION['loggedin'])&& $_SESSION["loggedin"]) {
        $userId = $_SESSION['username'];
        $cart = json_encode($_SESSION['cart']);

        // Prepare an SQL statement
        $stmt = $conn->prepare("UPDATE accounts SET cart = :cart WHERE email = :id");

        // Bind the parameters
        $stmt->bindParam(':cart', $cart);
        $stmt->bindParam(':id', $userId);

        // Execute the statement
        $stmt->execute();
      
    }  echo true;
}