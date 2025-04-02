<?php
include("dbh.inc.php");
function updateDataBaseCart(){
    if ( isset($_SESSION['loggedin'])&& $_SESSION["loggedin"]) {
        $userId = $_SESSION['username'];
        $cart = json_encode($_SESSION['cart']);
        global $conn;
        // Prepare an SQL statement
        $stmt =  $conn->prepare("UPDATE accounts SET cart = :cart WHERE email = :id");
     
        // Bind the parameters
        $stmt->bindParam(':cart', $cart);
        $stmt->bindParam(':id', $userId);
     
        // Execute the statement
        if($stmt->execute()){
          
        }else{
             echo 'the cart connected to your account cannot be updated at the time';
        }
     
     }
}
