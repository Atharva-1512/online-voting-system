<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['voter_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Voter Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2>Welcome, <?php echo $_SESSION['voter_name']; ?> 👋</h2>

        <hr>

        <a href="vote.php" class="btn btn-primary mb-2">
            🗳️ Vote Now
        </a>

        <a href="results.php" class="btn btn-info mb-2">
            📊 View Results
        </a>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>

</div>

</body>
</html>