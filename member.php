<?php

session_start();

if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");
    exit;

if ($_SESSION["role"] != "member") {
    header("Location: admin.php");
    exit;
}


}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <h1>Members Page</h1>

    <p> Welcome <?php echo $_SESSION["name"]; ?> </p>

    <a href="songList.php" class="btn btn-primary">View Songs</a>

    <br><br>

    <a href="index.php" class="btn btn-primary">View Events</a>

    <br><br>

    <a href="logout.php" class="btn btn-primary">Logout</a>


</body>

</html>

