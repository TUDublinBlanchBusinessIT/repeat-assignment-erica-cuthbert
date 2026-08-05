<?php

include 'db.php';

$sql = "SELECT * FROM events";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Repeat Project</title>
</head>

<body>

    <h1>Church Choir</h1>

    <h2>Upcoming events</h2>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <!-- https://www.php.net/manual/en/mysqli-result.fetch-row.php?  -->
     <h3><?php echo $row["event_name"]; ?></h3>
     
     <h3><?php echo $row["event_date"]; ?></h3>

     <h3><?php echo $row["location"]; ?></h3>


    <?php 
    
    }

include 'db.php';

$sql = "SELECT * FROM events";

$result = $conn->query($sql);

?>
</body>

</html>