<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../config/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO voters (name, email, password)
        VALUES ('$name', '$email', '$password')";

if ($conn->query($sql)) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $conn->error;
}
?>