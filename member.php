<?php

session_start();

if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Choir Login</title>
</head>

<body>

    <h1>Choir Login</h1>

    <p> Welcome <?php echo $_SESSION["name"]; ?> </p>

    <p> Role: <?php echo $_SESSION["role"]; ?> </p>

    <a href="songs.php">View Songs</a>

    <br><br>

    <a href="logout.php">Logout</a>


</body>

</html>