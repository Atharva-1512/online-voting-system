<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">🗳️ Election Results</h1>

    <div class="alert alert-success text-center">
        <h4>🏆 Winner: <?php echo $winner['name']; ?></h4>
    </div>

    <?php while($row = $candidates->fetch_assoc()){ ?>

        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5><?php echo $row['name']; ?></h5>
                <p>Party: <?php echo $row['party']; ?></p>
                <p><strong>Votes: <?php echo $row['votes']; ?></strong></p>
            </div>
        </div>

    <?php } ?>

</div>

</body>