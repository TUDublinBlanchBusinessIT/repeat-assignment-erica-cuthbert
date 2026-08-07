<?php

include 'db.php';

?>

<!DOCTYPE html>
<HTML>

<HEAD>
    <TITLE> New User </TITLE>
</HEAD>

	<BODY>

		<FORM method="POST" action="user.php">

			<label>Name:</label> 
			<input type="text" name="user_name"><br>

			<label>Email:</label>
			<input type="text" name="user_email"><br>

			<label>Password:</label>
			<input type="text" name="user_password"><br>

            <select name="role">
                <option value="member">Member</option>
                <option value="admin">Admin</option>

			<input type="submit" value="Add User"><br>
		</FORM>
	
	</BODY>