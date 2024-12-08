<?php
// db_connection.php
$servername = "192.168.56.101";
$username = "dbdpti";
$password = "rahasia";
$dbname = "jadwal_mata_pelajaran";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
