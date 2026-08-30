<?php

session_start();
include 'db.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];

$stmt = $conn->prepare(
    "SELECT * FROM songs WHERE song_id = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$song = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Song</title>
</head>

<body>

<h1><?php echo $song["song_name"]; ?></h1>

<h3>Music Score</h3>

<a href="<?php echo $song["pdf_file"]; ?>" download>
    Download PDF
</a>

<h3>Alto</h3>

<a href="<?php echo $song["alto_file"]; ?>" download>
    Download Alto
</a>

<h3>Bass</h3>

<a href="<?php echo $song["bass_file"]; ?>" download>
    Download Bass
</a>

<h3>Soprano</h3>

<a href="<?php echo $song["soprano_file"]; ?>" download>
    Download Soprano
</a>

<h3>Tenor</h3>

<a href="<?php echo $song["tenor_file"]; ?>" download>
    Download Tenor
</a>

<br><br>

<a href="songList.php">Back to Songs</a>

</body>
</html>

<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio -->
<!-- https://stackoverflow.com/questions/21386537/downloading-mp3-and-mp4-files-using-php -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/ -->
