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
</head>

<body>

<h1>Choir Songs</h1>

<?php while ($row = $result->fetch_assoc()) { ?>

    <h3><?php echo $row["song_name"]; ?></h3>

    <p href="songsDownload.php?id=<?php echo $row["song_id"]; ?>">
        View Song </p>

<?php } ?>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>

<!-- https://www.php.net/manual/en/mysqli.prepare.php? -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio? -->
