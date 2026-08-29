<!DOCTYPE html>

<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $song_name = $_POST["song_name"];

    $pdf_name = $_FILES["pdf_file"]["name"];
    $pdf_temp = $_FILES["pdf_file"]["tmp_name"];

    $pdf_folder = __DIR__ . "/songs/pdf/";
    $pdf_location = $pdf_folder . $pdf_name;

    if (move_uploaded_file($pdf_temp, $pdf_location)) {
        echo "PDF uploaded";
    } else {
        echo "PDF upload failed.";
    }

    if (!is_dir($pdf_folder)) {
    die("PDF folder does not exist: " . $pdf_folder);
    }
}

?>

<html>

<head>
    <title>Add Song</title>
</head>

<body>

    <h1>Add New Song</h1>

    <form method="POST" enctype="multipart/form-data">

        <label>Song Name:</label>
        <input type="text" name="song_name">

        <br><br>

        <label>PDF Score:</label>
        <input type="file" name="pdf_file" accept=".pdf" required>

        <br><br>

        <label>Alto Audio:</label>
        <input type="file" name="alto_file">

        <br><br>

        <label>Bass Audio:</label>
        <input type="file" name="bass_file">

        <br><br>

        <label>Soprano Audio:</label>
        <input type="file" name="soprano_file">

        <br><br>

        <label>Tenor Audio:</label>
        <input type="file" name="tenor_file">

        <br><br>

        <input type="submit" value="Add Song">

    </form>

</body>

</html>