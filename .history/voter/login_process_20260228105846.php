<?php
session_start();

include __DIR__ . '/../config/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM voters WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){

        $_SESSION['voter_id'] = $user['id'];
        $_SESSION['voter_name'] = $user['name'];

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Wrong Password";
    }

}else{
    echo "User Not Found";
}
?>