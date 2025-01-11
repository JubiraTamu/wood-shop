<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'wood_shop';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$query = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 font-sans text-gray-800">
    <div class="min-h-screen flex flex-col items-center py-10">
        <h1 class="text-4xl font-extrabold text-white mb-10 shadow-md">📬 Contact Messages</h1>
        <div class="bg-white rounded-lg shadow-xl w-11/12 max-w-6xl overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white">
                    <tr>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">#</th>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">Full Name</th>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">Email</th>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">Subject</th>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">Message</th>
                        <th class="px-6 py-4 border text-sm font-semibold uppercase">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50 divide-y divide-gray-500">
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-100 transition">
                                <td class="px-6 py-4 text-sm text-gray-800"><?php echo $row['id']; ?></td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium"><?php echo htmlspecialchars($row['full_name']); ?></td>
                                <td class="px-6 py-4 text-sm text-blue-500 font-medium"><?php echo htmlspecialchars($row['email']); ?></td>
                                <td class="px-6 py-4 text-sm text-gray-800"><?php echo htmlspecialchars($row['subject']); ?></td>
                                <td class="px-6 py-4 text-sm text-gray-600"><?php echo htmlspecialchars($row['message']); ?></td>
                                <td class="px-6 py-4 text-sm text-gray-500"><?php echo $row['created_at']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="px-6 py-6 text-center text-gray-600 font-medium">No messages found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
