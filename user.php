<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $role=$_POST['role'];

	$stmt = $conn->prepare(
        	"INSERT INTO users (name, email, password, role)
        	 VALUES (?, ?, ?, ?)"
    	);

	if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    	$stmt->bind_param("ssss", $name, $email, $password, $role);

    	if ($stmt->execute()) {
    		echo "User added successfully!";
	} else {
    	echo "Error adding user: " . $stmt->error;
	}
}

?>

<!DOCTYPE html>
<HTML>

<Hhead>
    <h1 class="text-center mb-4"> New User </h1>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

	<body class="bg-light">

	<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">

		<FORM method="POST" action="user.php">

		<div class="mb-3">
			<label class="form-label">Name:</label> 
			<input type="text" name="name" class="form-control">
		</div>

		<div class="mb-3">
			<label class="form-label">Email:</label>
			<input type="text" name="email" class="form-control">
		</div>

		<div class="mb-3">
			<label class="form-label">Password:</label>
			<input type="text" name="password" class="form-control">
		</div>

		<div class="mb-3">
        	<label class="form-label">Role:</label>

            <select name="role" class="form-select">
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
		</div>

		<div class="d-grid gap-2">

        	<input type="submit"
               	value="Add User"
               	class="btn btn-primary">

        	<a href="admin.php"
           		class="btn btn-outline-secondary">
            	Back to Admin Page
        	</a>

    	</div>
		
		</FORM>
	
	</BODY>