<?php
echo "this page is working";
require 'includes\dbh.inc.php';
session_start();
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Prepare the SQL query
//$stmt = $conn->prepare("SELECT password, cart, FROM accounts WHERE email = :email");
//$stmt->bindParam(':email', $username);

// Execute the statement

$stmt = $conn->prepare("SELECT password, cart, wholesale FROM accounts WHERE email = :email");
$stmt->bindParam(':email', $username);
$stmt->execute();

if ($user = $stmt->fetch()) {
   
    } 
else {
    echo "Could not find the username";
} 
if (password_verify($password, $user['password'])) {
        // If the password is correct, start the session
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Get the cart items from the database and decode the JSON into an array
    

        // Redirect the user to the index page

    }
    
     else {
        echo "Invalid login";
        exit();
    }
    if(isset($_SESSION['cart'])){
           //  $_SESSION['cart']   +=  json_decode($user['cart'], true);
            $dbCart=json_decode($user['cart'], true);
             foreach ($dbCart as $product => $dbItem) {
                if (isset($_SESSION['cart'][$product])) {
                    // Product exists in both carts, add quantities
                    $_SESSION['cart'][$product]['quantity'] += $dbItem['quantity'];
                } else {
                    // Product only in database cart, add it to session cart
                    $_SESSION['cart'][$product] = $dbItem;
                }
            }
             $stmt = $conn->prepare("UPDATE accounts SET cart = :cart WHERE email = :id");

             // Bind the parameters
             $stmt->bindParam(':cart', json_encode($_SESSION['cart']));
             $stmt->bindParam(':id', $username);
     
             // Execute the statement
             $stmt->execute();
    }
    else
    { 
        $_SESSION['cart'] = json_decode($user['cart'], true);
    } 
    echo json_encode($user['cart']). $user['wholesale'];
    
     $_SESSION['wholesale'] = $user['wholesale'];
