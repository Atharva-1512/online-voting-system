<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include __DIR__ . '/../config/db.php';

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}

$name   = $_POST['name'] ?? '';
$party  = $_POST['party'] ?? '';
$symbol = $_POST['symbol'] ?? '';

$sql = "INSERT INTO candidates (name, party, symbol)
        VALUES ('$name','$party','$symbol')";

if($conn->query($sql)){
    echo "Candidate Added Successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>