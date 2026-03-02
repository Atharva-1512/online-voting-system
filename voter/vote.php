<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
include __DIR__ . '/../config/db.php';

if(!isset($_SESSION['voter_id'])){
    header("Location: login.php");
    exit();
}

$voter_id = $_SESSION['voter_id'];

/* check voting status */
$result = $conn->query("SELECT has_voted FROM voters WHERE id=$voter_id");
$data = $result->fetch_assoc();

if($data['has_voted']==1){
    echo "<h2>You have already voted!</h2>";
    exit();
}

/* fetch candidates */
$candidates = $conn->query("SELECT * FROM candidates");
?>

<h2>Cast Your Vote</h2>

<?php while($row = $candidates->fetch_assoc()){ ?>

<form method="POST" action="vote_process.php">
    <h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['party']; ?></p>

    <input type="hidden" name="candidate_id"
           value="<?php echo $row['id']; ?>">

    <button type="submit">Vote</button>
</form>

<hr>

<?php } ?>