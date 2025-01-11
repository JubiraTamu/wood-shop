<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'wood_shop');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query user by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            // Redirect to dashboard
            header("Location: index.php");
            exit();
        } else {
            header("location:login.php?failed=true");
        }
    } else {
        header("location:login.php?user=true");
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
