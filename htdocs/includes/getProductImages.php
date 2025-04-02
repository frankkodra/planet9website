<?php
// includes/getProductImages.php

// Get the product ID from the query parameter
$productId = $_GET['productId'];

// Specify the directory where the product images are stored
$imageDirectory = "../assets/images/productImages/$productId/";

// Get all the image files in the specified directory
$imageFiles = glob($imageDirectory . "*.*");

// Extract the filenames from the full paths
$imageFilenames = array();
foreach ($imageFiles as $file) {
    $imageFilenames[] = basename($file);
}

// Return the image filenames as JSON
header('Content-Type: application/json');
echo json_encode($imageFilenames);
