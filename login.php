<?php

session_start();

include 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE email = ? AND password = ?"
    );

    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["name"] = $user["name"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["user_id"] = $user["user_id"];


    if ($user["role"] == "admin") {
        header("Location: admin.php");
    } else {
        header("Location: member.php");
    }

    exit;

        header("Location: member.php");
        exit;

    } else {

        $message = "Incorrect email or password.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Choir Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">


    <h1 class="text-center mb-4">Choir Login</h1>

    <?php echo $message; ?>

    <form method="POST" action="login.php">

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
      
    <div class="d-grid">
        <input type="submit" value="Login" class="btn btn-primary">
    </div>

    </form>
</div>

</body>

</html>

<!--https://www.w3schools.com/howto/howto_css_login_form.asp-->