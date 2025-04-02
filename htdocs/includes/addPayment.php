<?php
include("dbh.inc.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $cardNumber = $_POST["cardNumber"];
    $cardName = $_POST["cardName"];
    $ccv = $_POST["ccv"];
    $expDate = $_POST["expDate"];

    // Get the user ID or email (assuming you have a session or authentication system)
    $userId = 1; // Replace with the actual user ID or email

    // Create a new payment method array
    $paymentMethod = array(
        "type" => "credit_card",
        "number" => $cardNumber,
        "name" => $cardName,
        "ccv" => $ccv,
        "expiration_date" => $expDate
    );
    // Prepare the SQL statement to update the payment_methods column
    $sql = "UPDATE accounts SET payment_methods = JSON_ARRAY_APPEND(payment_methods, '$', ?) WHERE email = ?";
$stmt = $conn->prepare($sql);
$paymentMethod =json_encode($paymentMethod);
$stmt->bindParam(1, $paymentMethod);
$stmt->bindParam(2, $_SESSION['username']);
 if($stmt->execute()){
    echo'successfully add to database'. $paymentMethod;
 } 
else{
 echo "failed to save card to the database"  ; 
    
}


    // Execute the SQL statement
   

}