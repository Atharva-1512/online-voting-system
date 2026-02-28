<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Admin Dashboard</h2>

<a href="add_candidate.php">Add Candidate</a><br><br>
<a href="logout.php">Logout</a>