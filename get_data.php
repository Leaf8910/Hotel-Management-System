<?php
	// Connect to the database
	$mysqli = new mysqli("localhost", "username", "password", "getdate");

	// Perform the SQL query to retrieve data from the database
	$query = "SELECT * FROM unavailable_dates";
	$result = $mysqli->query($query);

	// Convert the query result to a PHP array and then to a JSON object
	$unavailable_dates = array();
	while ($row = $result->fetch_assoc()) {
		$unavailable_dates[] = $row["date"];
	}
	$unavailable_dates_json = json_encode($unavailable_dates);
?>
