<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION["role"] != "admin") {
    header("Location: member.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admins Page</title>
</head>

<body>

<h1>Admin Page</h1>

<p>Welcome <?php echo $_SESSION["name"]; ?></p>

<a href="songs.php">Add Songs</a>

<br><br>

<a href="user.php">Add Users</a>

<br><br>

<a href="event.php">Add Events</a>

<br><br>

<a href="logout.php">Logout</a>

</body>

</html>