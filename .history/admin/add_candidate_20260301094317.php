<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Add Candidate</h2>

<form method="POST" action="add_candidate_process.php">

<input type="text" name="name" placeholder="Candidate Name" required><br><br>

<input type="text" name="party" placeholder="Party Name" required><br><br>

<input type="text" name="symbol" placeholder="Symbol Image URL" required><br><br>

<button type="submit">Add Candidate</button>

</form>

<a href="dashboard.php">Back</a>