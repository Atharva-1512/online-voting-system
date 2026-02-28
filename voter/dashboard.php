<?php
session_start();

if(!isset($_SESSION['voter_id'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['voter_name']; ?></h2>

<a href="logout.php">Logout</a>