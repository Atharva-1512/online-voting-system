<?php

session_start();
include __DIR__ . '/../config/db.php';

if(!isset($_SESSION['voter_id'])){
    header("Location: login.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors',1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$voter_id = $_SESSION['voter_id'];
$candidate_id = $_POST['candidate_id'];

/* check voting status */
$check = $conn->query("SELECT has_voted FROM voters WHERE id=$voter_id");
$data = $check->fetch_assoc();

if($data['has_voted']){
    echo "You already voted!";
    exit();
}

/* add vote */
$conn->query("UPDATE candidates SET votes = votes + 1 WHERE id=$candidate_id");

/* mark voter as voted */
$conn->query("UPDATE voters SET has_voted=1 WHERE id=$voter_id");

echo "Vote Cast Successfully!";
?>