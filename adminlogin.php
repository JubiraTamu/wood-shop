<?php
// Connect to database
$conn = new mysqli('localhost', 'root', '', 'wood_shop');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            header("location:admin.php?");
        } else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    } else {
        header("location:admin.php?");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-green-400 to-teal-500 h-screen flex items-center justify-center">

    <!-- Login Card -->
    <div class="bg-white p-8 rounded-3xl shadow-xl w-full max-w-md transform hover:scale-105 transition duration-500 ease-in-out">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Welcome Admin!</h2>

        <!-- Login Form -->
        <form method="POST" action="">
            <!-- Email -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-4 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition" placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-2">Password</label>
                <input type="password" name="password" required class="w-full p-4 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition" placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-teal-600 to-green-600 text-white font-bold rounded-lg hover:bg-gradient-to-l hover:from-teal-500 hover:to-green-500 transition duration-300 ease-in-out">
                Login
            </button>

            <!-- Register Link -->
            <p class="text-sm text-gray-500 mt-4 text-center">Don't have an account? <a href="adminregistration.php" class="text-teal-700 hover:underline">Register</a></p>
        </form>
    </div>

</body>

</html>
