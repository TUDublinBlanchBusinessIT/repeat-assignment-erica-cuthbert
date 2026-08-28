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

    <p> Welcomw <?php echo $_SESSION["name"]; ?> </p>

    <p> Role: <?php echo $_SESSION["role"]; ?> </p>


</body>

</html>