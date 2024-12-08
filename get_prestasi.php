<?php
// get_prestasi.php
include 'db.connection.php'; // Include the connection file

// Query to fetch data from "prestasi" table
$sql = "SELECT * FROM prestasi";
$result = $conn->query($sql);

echo $result->num_rows;

if ($result->num_rows > 0) {
    // Fetch all rows into an array
    $data = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $data = []; // Empty array if no rows are found
}

// Close the connection after fetching data
$conn->close();

// Return the data
return $data;
?>
