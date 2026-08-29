<!DOCTYPE html>

<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $song_name = $_POST["song_name"];

    $pdf_name = $_FILES["pdf_file"]["name"];
    $pdf_temp = $_FILES["pdf_file"]["tmp_name"];

    $pdf_folder = __DIR__ . "/Songs/pdf/";
    $pdf_location = $pdf_folder . $pdf_name;

    $alto_name = $_FILES["alto_file"]["name"];
    $alto_temp = $_FILES["alto_file"]["tmp_name"];

    $bass_name = $_FILES["bass_file"]["name"];
    $bass_temp = $_FILES["bass_file"]["tmp_name"];

    $soprano_name = $_FILES["soprano_file"]["name"];
    $soprano_temp = $_FILES["soprano_file"]["tmp_name"];

    $tenor_name = $_FILES["tenor_file"]["name"];
    $tenor_temp = $_FILES["tenor_file"]["tmp_name"];

    $audio_folder = __DIR__ . "/Songs/audio/";

    $alto_location = $audio_folder . $alto_name;
    $bass_location = $audio_folder . $bass_name;
    $soprano_location = $audio_folder . $soprano_name;
    $tenor_location = $audio_folder . $tenor_name;

 if (move_uploaded_file($pdf_temp, $pdf_location)) {

        move_uploaded_file($alto_temp, $alto_location);
        move_uploaded_file($bass_temp, $bass_location);
        move_uploaded_file($soprano_temp, $soprano_location);
        move_uploaded_file($tenor_temp, $tenor_location);

        $pdf_database_path = "uploads/pdf/" . $pdf_name;

        $alto_database_path = "uploads/audio/" . $alto_name;
        $bass_database_path = "uploads/audio/" . $bass_name;
        $soprano_database_path = "uploads/audio/" . $soprano_name;
        $tenor_database_path = "uploads/audio/" . $tenor_name;

        $stmt = $conn->prepare(
            "INSERT INTO songs (
                song_name,
                pdf_file,
                alto_file,
                bass_file,
                soprano_file,
                tenor_file
            )
            VALUES (?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param(
            "ssssss",
            $song_name,
            $pdf_database_path,
            $alto_database_path,
            $bass_database_path,
            $soprano_database_path,
            $tenor_database_path
        );

        if ($stmt->execute()) {
            echo "Song and all files added successfully!";
        } else {
            echo "Database error: " . $stmt->error;
        }

    } else {

        echo "PDF upload failed.";

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
        <input type="file" name="alto_file" required>

        <br><br>

        <label>Bass Audio:</label>
        <input type="file" name="bass_file" required>

        <br><br>

        <label>Soprano Audio:</label>
        <input type="file" name="soprano_file" required>

        <br><br>

        <label>Tenor Audio:</label>
        <input type="file" name="tenor_file" required>

        <br><br>

        <input type="submit" value="Add Song" required>

    </form>

</body>

</html>