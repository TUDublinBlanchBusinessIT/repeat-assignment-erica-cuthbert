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
    <title>Song Downloads</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">

<h1 class="text-center mb-4"><?php echo $song["song_name"]; ?></h1>

<h4>Music Score</h4>

<a href="<?php echo $song["pdf_file"]; ?>" class="btn btn-primary mb-4" download>
    Download PDF
</a>

<h3>Alto</h3>

<a href="<?php echo $song["alto_file"]; ?>" class="btn btn-primary mb-4" download>
    Download Alto
</a>

<h3>Bass</h3>

<a href="<?php echo $song["bass_file"]; ?>" class="btn btn-primary mb-4" download>
    Download Bass
</a>

<h3>Soprano</h3>

<a href="<?php echo $song["soprano_file"]; ?>" class="btn btn-primary mb-4" download>
    Download Soprano
</a>

<h3>Tenor</h3>

<a href="<?php echo $song["tenor_file"]; ?>" class="btn btn-primary mb-4" download>
    Download Tenor
</a>

<br><br>

<a href="songList.php" class="btn btn-outline-secondary">Back to Songs</a>

</body>
</html>

<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio -->
<!-- https://stackoverflow.com/questions/21386537/downloading-mp3-and-mp4-files-using-php -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/ -->
