<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'wood_shop';
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_SESSION['user_id'])) {
    // Optional: Update status in the database
    $userId = $_SESSION['user_id'];
    $sql = "UPDATE users SET status = 'offline' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
}
// Destroy session
session_unset();
session_destroy();

// Redirect to login page
header("Location: login.php");
exit();
?>
