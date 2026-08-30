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

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4 mx-auto" style="max-width: 500px;">

    <h1 class="text-center mb-3">Members Page</h1>

     <p class="text-center"> Welcome <?php echo $_SESSION["name"]; ?></p>

    <div class="d-grid gap-3">

    <a href="songList.php" class="btn btn-primary">View Songs</a>

    <br><br>

    <a href="index.php" class="btn btn-primary">View Events</a>

    <br><br>

    <a href="logout.php" class="btn btn-secondary">Logout</a>

      </div>

    </div>

</div>


</body>

</html>

