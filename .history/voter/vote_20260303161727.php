<div class="container mt-5">
<h2 class="mb-4">Cast Your Vote</h2>

<?php while($row = $candidates->fetch_assoc()){ ?>

<div class="card mb-3 shadow-sm">
    <div class="card-body">

        <h5><?php echo $row['name']; ?></h5>
        <p>Party: <?php echo $row['party']; ?></p>

        <form method="POST" action="vote_process.php">
            <input type="hidden" name="candidate_id"
                   value="<?php echo $row['id']; ?>">
            <button class="btn btn-success">Vote</button>
        </form>

    </div>
</div>

<?php } ?>

</div>