<?php

session_start();
include 'db.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM songs");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Songs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

     <div class="card shadow p-4 mx-auto" style="max-width: 600px;">

<h1 class="text-center mb-4">Choir Songs</h1>

<?php while ($row = $result->fetch_assoc()) { ?>

<div class="card mb-3">
    <div class="card-body">

    <h4><?php echo $row["song_name"]; ?></h4>

    <a href="songsDownloads.php?id=<?php echo $row["song_id"]; ?>"class="btn btn-primary">
        View Song </a>

</div>
</div>

<?php } ?>

<br><br>

<a href="member.php" class="btn btn-outline-secondary">Back to Homepage</a>

</body>
</html>

<!-- https://www.php.net/manual/en/mysqli.prepare.php? -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio? -->
