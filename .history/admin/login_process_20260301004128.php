<?php
session_start();
include __DIR__ . '/../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username='$username'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $admin = $result->fetch_assoc();

    if($password == $admin['password']){

        $_SESSION['admin_id'] = $admin['id'];
        header("Location: dashboard.php");
        exit();

    }else{
        echo "Wrong Password";
    }

}else{
    echo "Admin Not Found";
}
?>