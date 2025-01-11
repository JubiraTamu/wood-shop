<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-lg p-10 max-w-5xl w-full">
        <h2 class="text-3xl font-extrabold text-blue-600 text-center mb-8">User Information</h2>

        <table class="table-auto w-full border-collapse rounded-lg overflow-hidden shadow-md">
            <thead>
                <tr class="bg-gradient-to-r from-blue-500 to-green-500 text-white">
                    <th class="border border-gray-200 px-4 py-3 text-left font-semibold text-sm">ID</th>
                    <th class="border border-gray-200 px-4 py-3 text-left font-semibold text-sm">Name</th>
                    <th class="border border-gray-200 px-4 py-3 text-left font-semibold text-sm">Email</th>
                    <th class="border border-gray-200 px-4 py-3 text-left font-semibold text-sm">Role</th>
                </tr>
            </thead>
            <tbody class="bg-gradient-to-r from-blue-100 to-green-100">
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root"; // Use your DB username
                $password = "";     // Use your DB password
                $dbname = "wood_shop"; // Database name

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch users from the database
                $sql = "SELECT id, name, email, role FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='hover:bg-green-200'>
                                <td class='border border-gray-300 px-4 py-2 text-gray-800'>{$row['id']}</td>
                                <td class='border border-gray-300 px-4 py-2 text-gray-800 font-medium'>{$row['name']}</td>
                                <td class='border border-gray-300 px-4 py-2 text-gray-600'>{$row['email']}</td>
                                <td class='border border-gray-300 px-4 py-2 text-gray-700 font-semibold'>{$row['role']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center text-gray-600 py-4 font-medium'>No users found</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
