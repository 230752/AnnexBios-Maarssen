<?php
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "annexbiosmaarssen"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Fetching and Displaying data from database (test)
// Can be deleted after testing

// SQL query to fetch data from the movieagenda table
$query = "SELECT * FROM movieagenda";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["agenda_id"]. " - Movie: " . $row["movie_id"]. " - Time: " . $row["agenda_startdate"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();




