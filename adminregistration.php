<?php
// Connect to database
$conn = new mysqli('localhost', 'root', '', 'wood_shop');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($query)) {
        header("location:adminlogin.php?");
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-screen flex items-center justify-center">

    <!-- Registration Card -->
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-lg w-full transform hover:scale-105 transition duration-500 ease-in-out">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Create an Account</h2>

        <!-- Registration Form -->
        <form method="POST" action="">
            <!-- Username -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-2">Username</label>
                <input type="text" name="username" required class="w-full p-4 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition" placeholder="Enter your username">
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-4 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition" placeholder="Enter your email address">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-2">Password</label>
                <input type="password" name="password" required class="w-full p-4 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition" placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-lg hover:bg-gradient-to-l hover:from-purple-500 hover:to-pink-500 transition duration-300 ease-in-out">
                Register
            </button>

            <!-- Login Link -->
            <p class="text-sm text-gray-500 mt-4 text-center">Already have an account? <a href="adminlogin.php" class="text-purple-700 hover:underline">Login</a></p>
        </form>
    </div>

</body>

</html>
