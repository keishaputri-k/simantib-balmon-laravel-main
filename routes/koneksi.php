<?php
//koneksi with Mysqli
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "coba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//koneksi with PDO

try {
    $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: ".$e->getMessage();
}
?>