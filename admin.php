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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">

<h1 class="text-center mb-3">Admin Page</h1>

<p class="text-center">Welcome <?php echo $_SESSION["name"]; ?></p>


<div class="d-grid gap-3">

<a href="songs.php" class="btn btn-primary">Add Songs</a>

<br><br>

<a href="user.php" class="btn btn-primary">Add Users</a>

<br><br>

<a href="event.php" class="btn btn-primary">Add Events</a>

<br><br>

<a href="logout.php" class="btn btn-outline-secondary" >Logout</a>

</div>

    </div>

</div>


</body>

</html>