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
</head>

<body>

    <h1>Member</h1>

    <p> Welcome <?php echo $_SESSION["name"]; ?> </p>

    <a href="songList.php">View Songs</a>

    <br><br>

    <a href="index.php">View Events</a>

    <br><br>

    <a href="logout.php">Logout</a>


</body>

</html>

