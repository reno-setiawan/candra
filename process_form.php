<?php
//koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madinatulilmi";

$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//mengambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//query untuk menyimpan data ke dalam database
$sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    $response = array('status' => 'success', 'message' => 'Pesan Telah Berhasil Terkirim :)');
} else {
    $response = array('status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . $conn->error);
}

echo json_encode($response);
?>
