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
	<BODY>
		<FORM method="POST" action="event.php">

			<label>Event Name:</label> 
			<input type="text" name="event_name"><br>

			<label>Event Date:</label>
			<input type="date" name="event_date"><br>

			<label>Event Location:</label>
			<input type="text" name="event_location"><br>

			<input type="submit" value="Add Event"><br>
		</FORM>
	
	</BODY>


<!-- lab 4 - newMember.php -->
<!-- lab 8 - matchResults.html -->