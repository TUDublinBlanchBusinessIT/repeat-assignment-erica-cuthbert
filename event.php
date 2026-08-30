<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$event_name=$_POST['event_name'];
	$event_date=$_POST['event_date'];
	$location=$_POST['event_location'];

	$stmt = $conn->prepare(
        	"INSERT INTO events (event_name, event_date, location)
        	 VALUES (?, ?, ?)"
    	);

    	$stmt->bind_param("sss", $event_name, $event_date, $location);

    	$stmt->execute();

    	echo "Event added successfully!";
}

?>

<!-- lab 9 - carPolicy.php -->

<!DOCTYPE html>
<HTML>
	<head>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
		<body class="bg-light">

		<div class="container mt-5">
			<h1 class="text-center mb-4">Add New Event</h1>

			<form method="POST" action="event.php">

			<div class="mb-3">
				<label class="form-label">Event Name:</label> 
				<input type="text" name="event_name" class="form-control">
			</div>

			<div class="mb-3">
				<label>Event Date:</label>
				<input type="date" name="event_date" class="form-control">
			</div>

			<div class="mb-3">
				<label>Event Location:</label>
				<input type="text" name="event_location"  class="form-control">
			</div>
			<div class="d-grid gap-2">
				<input type="submit" value="Add Event" class="btn btn-primary">
			</div>
			
				<a href="admin.php"
                   class="btn btn-outline-secondary">
                    Back to Admin Page
                </a>

            </div>
		</form>
	
	</body>


<!-- lab 4 - newMember.php -->
<!-- lab 8 - matchResults.html -->