<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scrollbar for better UI */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background: #6366f1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4f46e5;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-extrabold text-center text-indigo-800 mb-10">Manage Your Products</h1>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'wood_shop');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Handle product deletion
        if (isset($_GET['delete'])) {
            $id = intval($_GET['delete']);
            $deleteQuery = "SELECT image FROM products WHERE id=$id";
            $result = $conn->query($deleteQuery);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (file_exists($row['image'])) {
                    unlink($row['image']); // Delete image file
                }
            }
            $conn->query("DELETE FROM products WHERE id=$id");
            echo "<div class='bg-green-100 text-green-700 p-4 rounded mb-6'>Product deleted successfully!</div>";
        }

        // Handle product update
        if (isset($_POST['update'])) {
            $id = intval($_POST['id']);
            $name = $conn->real_escape_string($_POST['name']);
            $price = $conn->real_escape_string($_POST['price']);
            $description = $conn->real_escape_string($_POST['description']);
            $image = $_POST['existing_image'];

            // Handle new image upload
            $uploadDir = 'uploads/';
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageName = uniqid() . '-' . basename($_FILES['image']['name']);
                $imagePath = $uploadDir . $imageName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    if (file_exists($image)) {
                        unlink($image); // Delete old image
                    }
                    $image = $imagePath;
                }
            }

            $sql = "UPDATE products SET name='$name', price='$price', description='$description', image='$image' WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='bg-green-100 text-green-700 p-4 rounded mb-6'>Product updated successfully!</div>";
            } else {
                echo "<div class='bg-red-100 text-red-700 p-4 rounded mb-6'>Error: " . $conn->error . "</div>";
            }
        }

        // Fetch all products
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        ?>
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow overflow-hidden">
                <thead class="bg-indigo-600 text-white text-left">
                    <tr>
                        <th class="p-4">Image</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Price</th>
                        <th class="p-4 ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="border-b hover:bg-blue-50 transition duration-200">
                                <td class="p-4">
                                    <img src="<?php echo $row['image']; ?>" alt="Product Image" class="h-16 w-16 object-cover rounded shadow">
                                </td>
                                <td class="p-4 text-gray-800"><?php echo htmlspecialchars($row['name']); ?></td>
                                <td class="p-4 text-gray-800">TK <?php echo number_format($row['price'], 2); ?></td>
                                <td class="p-4">
                                    <!-- Update Button -->
                                    <button onclick="openEditModal(<?php echo htmlspecialchars(json_encode($row)); ?>)" 
                                            class="text-white bg-green-500 px-6 py-1 hover:underline font-medium rounded-md">Edit</button>
                                    |
                                    <!-- Delete Button -->
                                    <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');" 
                                       class="text-white bg-red-500 px-4 py-1 rounded-md hover:underline font-medium bg">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="p-4 text-center text-gray-500">No products found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Edit Modal -->
        <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
            <div class="bg-white w-full max-w-lg p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-indigo-800">Edit Product</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="productId">
                    <input type="hidden" name="existing_image" id="existingImage">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Product Name</label>
                        <input type="text" id="productName" name="name" required
                               class="w-full p-3 border border-gray-300 rounded shadow">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                        <input type="number" id="productPrice" name="price" step="0.01" required
                               class="w-full p-3 border border-gray-300 rounded shadow">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                        <textarea id="productDescription" name="description" rows="4"
                                  class="w-full p-3 border border-gray-300 rounded shadow"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-medium mb-2">Product Image</label>
                        <input type="file" id="productImage" name="image" accept="image/*"
                               class="w-full p-3 border border-gray-300 rounded shadow">
                        <div id="imagePreview" class="mt-2"></div>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="button" onclick="closeEditModal()" class="bg-gray-600 text-white px-6 py-2 rounded">Cancel</button>
                        <button type="submit" name="update" class="bg-blue-600 text-white px-6 py-2 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(product) {
            document.getElementById('productId').value = product.id;
            document.getElementById('productName').value = product.name;
            document.getElementById('productPrice').value = product.price;
            document.getElementById('productDescription').value = product.description;
            document.getElementById('existingImage').value = product.image;

            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = product.image ? `<img src="${product.image}" alt="Product Image" class="h-20 w-20 object-cover rounded shadow">` : '';

            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</body>
</html>
