<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
    $role=$_POST['role'];


	$stmt = $conn->prepare(
        	"INSERT INTO users (name, email, password, role)
        	 VALUES (?, ?, ?, ?)"
    	);

    	$stmt->bind_param("ssss", $name, $email, $password, $role);

    	$stmt->execute();

    	echo "Event added successfully!";
}

?>

<!DOCTYPE html>
<HTML>

<HEAD>
    <TITLE> New User </TITLE>
</HEAD>

	<BODY>

		<FORM method="POST" action="user.php">

			<label>Name:</label> 
			<input type="text" name="name"><br>

			<label>Email:</label>
			<input type="text" name="email"><br>

			<label>Password:</label>
			<input type="text" name="password"><br>

            <select name="role">
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>

			<input type="submit" value="Add User"><br>
		</FORM>
	
	</BODY>