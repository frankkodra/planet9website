<?php
require 'includes\dbh.inc.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    return;
}

// Get form data
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Validate form data
if (empty($email) || empty($password) || empty($confirmPassword)) {
    echo "Email and password fields are required.";
    return;
}

if ($password !== $confirmPassword) {
    echo "Passwords do not match.";
    return;
}

// Check if email already exists
$stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
$stmt->bindParam(1, $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "An account with this email already exists.";
    return;
}
$stmt = $conn->prepare("SELECT * FROM accounts WHERE phone_number = ?");
$stmt->bindParam(1, $phone);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "An account with this phone number already exists.";
    return;
}


// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare orders and cart as empty JSON objects
$orders = json_encode(array());
if (isset($_SESSION['cart'])){
  
    $cart = json_encode($_SESSION['cart']);
    // Bind the parameters

}
else{
 $cart = json_encode(array());   
}


// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO accounts (email, phone_number, password, orders, cart) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $phone);
$stmt->bindParam(3, $hashedPassword);
$stmt->bindParam(4, $orders);
$stmt->bindParam(5, $cart);

// Execute the statement
try {
    $stmt->execute();
    echo "Account created successfully.";
    $_SESSION["loggedin"] = true;  
    $_SESSION["username"] = $email;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>