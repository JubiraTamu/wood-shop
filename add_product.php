<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-indigo-700 mb-6">Add New Product</h1>
        <?php
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'wood_shop');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve form inputs
            $name = $conn->real_escape_string($_POST['name']);
            $price = $conn->real_escape_string($_POST['price']);
            $description = $conn->real_escape_string($_POST['description']);
            $image = null;

            // Handle image upload
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
            }

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageName = uniqid() . '-' . basename($_FILES['image']['name']);
                $imagePath = $uploadDir . $imageName;

                // Move uploaded file
                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $image = $imagePath;
                } else {
                    echo "<div class='text-red-600 font-medium mb-4'>Error: Unable to upload image.</div>";
                }
            }

            // Insert data into the database
            $sql = "INSERT INTO products (name, price, description, image) VALUES ('$name', '$price', '$description', '$image')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='text-green-600 font-medium mb-4'>Product added successfully!</div>";
            } else {
                echo "<div class='text-red-600 font-medium mb-4'>Error: " . $conn->error . "</div>";
            }

            $conn->close();
        }
        ?>

        <!-- Product Form -->
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Product Name</label>
                <input type="text" id="name" name="name" required
                       class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>
            <div>
                <label for="price" class="block text-lg font-medium text-gray-700 mb-2">Price</label>
                <input type="number" id="price" name="price" step="0.01" required
                       class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>
            <div>
                <label for="description" class="block text-lg font-medium text-gray-700 mb-2">Description</label>
                <textarea id="description" name="description" rows="4" 
                          class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
            </div>
            <div>
                <label for="image" class="block text-lg font-medium text-gray-700 mb-2">Product Image</label>
                <input type="file" id="image" name="image" accept="image/*" 
                       class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>
            <button type="submit" class="w-full py-3 bg-indigo-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-300">
                Add Product
            </button>
        </form>
    </div>
</body>
</html>
