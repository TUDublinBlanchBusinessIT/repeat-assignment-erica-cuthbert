<?php

include 'db.php';

$sql = "SELECT * FROM events";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Repeat Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width: 700px;">

    <h1 class="text-center mb-4">Upcoming Events</h1>

     <div class="border rounded p-3 mb-3">

    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="border rounded p-3 mb-3">
    <!-- https://www.php.net/manual/en/mysqli-result.fetch-row.php?  -->
     
    </p><h3><?php echo $row["event_name"]; ?></h3>
    
    <p class="mb-1"></P><h3><?php echo $row["event_date"]; ?></h3>

    <p class="mb-0"></p><h3><?php echo $row["location"]; ?></h3>

    </div>
    <?php 
    
    }

include 'db.php';

$sql = "SELECT * FROM events";

$result = $conn->query($sql);

?>

<a href="member.php" class="btn btn-outline-secondary">Back to Homepage</a>

</body>

</html>