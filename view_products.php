<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Simulating the order and cart actions
        function orderNow(productId) {
            alert("Order placed for product ID: " + productId);
        }

        function addToCart(productName, productPrice) {
            alert(productName + " added to cart at price TK: " + productPrice);
        }
    </script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-orange-700 mb-6">Our Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'wood_shop');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch products from the database
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $name = htmlspecialchars($row['name']);
                    $price = number_format($row['price'], 2);
                    $image = htmlspecialchars($row['image']);
                    ?>
                    <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" 
                             class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                        <div class="mt-2">
                            <h1 class="font-bold text-2xl text-orange-700"><?php echo $name; ?></h1>
                            <h2 class="font-medium text-lg text-orange-500">TK: <?php echo $price; ?></h2>
                        </div>
                        <div>
                            <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" 
                                    onclick="orderNow(<?php echo $id; ?>)">Order Now</button>
                            <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" 
                                    onclick="addToCart('<?php echo $name; ?>', <?php echo $price; ?>)">Add to cart</button>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center col-span-3 text-gray-500'>No products available.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
