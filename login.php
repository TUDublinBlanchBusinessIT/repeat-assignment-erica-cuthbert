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
</head>

<body>

    <h1>Choir Login</h1>

    <?php echo $message; ?>

    <form method="POST" action="login.php">

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <input type="submit" value="Login">

    </form>

</body>

</html>

<!--https://www.w3schools.com/howto/howto_css_login_form.asp-->