<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "r229q057", "yuF4cuNa", "r229q057");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
  echo "<h1 style='text-align: center; color: #0079b6; font-family: Helvetica;' class='text-center'>View Users</h1>";
  echo "<table align='center'>" . "<th style='border: 1px solid black; font-size: 18px;'>Users</th>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td style='border: 1px solid black;' align='center'>" . $row["user_id"] . "</td></tr>";
  }
  echo "</table>";
}

/* close connection */
$mysqli->close();
?>
