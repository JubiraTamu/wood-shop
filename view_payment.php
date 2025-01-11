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

// Fetch all payments from the database
$sql = "SELECT * FROM payments ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 font-sans text-gray-800 antialiased">

    <!-- Container -->
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold text-center text-white mb-10">
            💳 View All Payments
        </h1>

        <!-- Table Wrapper -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full text-md text-center text-gray-800">
                <thead class="bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-center">Cardholder</th>
                        <th class="px-6 py-3 text-center">Card Number</th>
                        <th class="px-6 py-3 text-center">Price</th>
                        <th class="px-6 py-3 text-center">Date</th>
                        <th class="px-6 py-3 text-center">Method</th>
                        <th class="px-6 py-3 text-center">Created At</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='border-b hover:bg-gray-100'>";
                            
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['cardholder_name']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['card_number']) . "</td>";
                            echo "<td class='px-6 py-4'>$" . number_format($row['product_price'], 2) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['payment_date']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['payment_method']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['created_at']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='px-6 py-4 text-center text-gray-500'>No payments found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-6">
            <a href="payment.php" class="inline-block py-2 px-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-lg hover:bg-purple-700 transition duration-300">
                Add New Payment
            </a>
        </div>
    </div>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
