<?php
// Database connection details
$host = 'localhost'; // Replace with your database host
$user = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'wood_shop'; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $full_name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs
    if (empty($full_name) || empty($email) || empty($subject) || empty($message)) {
        echo "<script>alert('All fields are required.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.');</script>";
    } else {
        // Prepare SQL query to insert data into the database
        $stmt = $conn->prepare("INSERT INTO contact_messages (full_name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $full_name, $email, $subject, $message);

        // Execute the query
        if ($stmt->execute()) {
            header("location:contact.php?failed=true");
        } else {
            echo "<script>alert('There was an error sending your message. Please try again.');</script>";
        }

        // Close the prepared statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
