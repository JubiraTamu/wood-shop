<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced Wood Furniture Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#4F46E5",
            secondary: "#F59E0B",
            accent: "#10B981",
            neutral: "#64748B",
          },
        },
      },
    };
  </script>
</head>

<body class="bg-gray-50 font-sans antialiased">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gradient-to-b from-primary to-secondary text-white flex flex-col">
      <div class="text-center py-6 text-2xl font-bold">Furniture Admin</div>
      <nav class="flex-1 px-4 space-y-4 font-semibold">
        <a href="#" class="block py-2 px-3 rounded-md bg-primary/75 hover:bg-primary text-white">Dashboard</a>
        <a href="view_products.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Products</a>
        <a href="view_payment.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Payments</a>
        <a href="view_users.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Customers</a>
        <a href="view_message.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Message</a>
        <a href="add_product.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Add_product</a>
        <a href="manage_products.php" class="block py-2 px-3 rounded-md hover:bg-primary/75">Manage Product</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Header -->
      <header class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
        <a href="adminlogin.php" class="py-2 px-4 bg-accent font-semibold text-white rounded-lg shadow hover:bg-red-500">Logout</a>
      </header>

      <!-- Cards Section -->
      <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
          <h2 class="text-xl font-semibold text-gray-700">Total Sales</h2>
          <p class="text-3xl font-bold text-gray-900">$12,450</p>
          <p class="text-sm text-neutral mt-2">+18% from last month</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-secondary">
          <h2 class="text-xl font-semibold text-gray-700">New Orders</h2>
          <p class="text-3xl font-bold text-gray-900">245</p>
          <p class="text-sm text-neutral mt-2">+10% from last month</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-accent">
          <h2 class="text-xl font-semibold text-gray-700">Inventory Status</h2>
          <p class="text-3xl font-bold text-gray-900">72%</p>
          <p class="text-sm text-neutral mt-2">Stock level stable</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
          <h2 class="text-xl font-semibold text-gray-700">New Bed Add</h2>
          <p class="text-3xl font-bold text-gray-900">Items:200</p>
          <p class="text-sm text-neutral mt-2">+10% offer this month</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-secondary">
          <h2 class="text-xl font-semibold text-gray-700">Last Month Orders</h2>
          <p class="text-3xl font-bold text-gray-900">165</p>
          <p class="text-sm text-neutral mt-2">+20% from last month</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-accent">
          <h2 class="text-xl font-semibold text-gray-700">All Product Available</h2>
          <p class="text-3xl font-bold text-gray-900">100%</p>
          <p class="text-sm text-neutral mt-2">Stock level stable</p>
        </div>
      </section>


    </main>
  </div>

</body>

</html>