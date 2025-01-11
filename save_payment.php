<?php
// Include the database connection file
$host = "localhost";
$user = "root";
$password = "";
$database = "wood_shop";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $cardholder_name = $conn->real_escape_string($_POST['cardholder']);
    $card_number = $conn->real_escape_string($_POST['cardnumber']);
    $product_price = $conn->real_escape_string($_POST['productprice']);
    $payment_date = $conn->real_escape_string($_POST['date']);
    $payment_method = $conn->real_escape_string($_POST['payment_method']); // Pass this from the form

    // Validate inputs (basic validation)
    if (empty($cardholder_name) || empty($card_number) || empty($product_price) || empty($payment_date)) {
        die("Please fill in all required fields.");
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO payments (cardholder_name, card_number, product_price, payment_date, payment_method) 
            VALUES ('$cardholder_name', '$card_number', '$product_price', '$payment_date', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        header("Location: payment.php?failed=true"); // Redirect to a success page (optional)
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
