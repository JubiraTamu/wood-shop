<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Method</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#4F46E5",
            secondary: "#F59E0B",
            accent: "#10B981",
            danger: "#EF4444",
            grayLight: "#F3F4F6",
          },
        },
      },
    };
  </script>
</head>

<body class="bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 font-sans text-gray-800 antialiased">

  <!-- Container -->
  <div class="min-h-screen flex flex-col justify-center items-center px-4 md:px-8">
    <!-- Card -->
    <div class="bg-white shadow-2xl rounded-lg w-full max-w-lg p-8 md:p-10">
      <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-6">
        💳 Secure Payment
      </h1>
      <?php if(isset($_GET["failed"]) && $_GET["failed"] == "true" ) {?>
     <div class="denger pl-10 font-bold font-serif pb-4 text-2xl text-green-500">Thank you for your Payment!</div>
    <?php } ?>

      <!-- Card Selection -->
      <h2 class="text-xl font-semibold text-gray-700 mb-4">Select Payment Method</h2>
      <div class="grid grid-cols-2 gap-4 mb-8">
        <!-- Visa -->
        <button
          class="border-2 border-gray-200 rounded-lg p-4 flex items-center justify-between hover:shadow-md focus:outline-none focus:ring-2 focus:ring-primary transition">
          <img src="https://www.iconpacks.net/icons/free-icons-6/free-visa-credit-card-payment-method-icon-19674-thumb.png" alt="Visa" class="w-16 h-12">
          <span class="text-gray-800 font-medium">Visa</span>
        </button>
        <!-- MasterCard -->
        <button
          class="border-2 border-gray-200 rounded-lg p-4 flex items-center justify-between hover:shadow-md focus:outline-none focus:ring-2 focus:ring-primary transition">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png" alt="MasterCard"
            class="w-16 h-12">
          <span class="text-gray-800 font-medium">MasterCard</span>
        </button>
      </div>

      <!-- Payment Details -->
      <h2 class="text-xl font-semibold text-gray-700 mb-4">Payment Details</h2>
      <form action="save_payment.php" method="POST">
    <!-- Cardholder Name -->
    <div class="mb-6">
        <label for="cardholder" class="block text-gray-600 font-medium mb-2">Cardholder Name</label>
        <input id="cardholder" name="cardholder" type="text" placeholder="Your Name"
            class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
    </div>

    <!-- Card Number -->
    <div class="mb-6">
        <label for="cardnumber" class="block text-gray-600 font-medium mb-2">Card Number</label>
        <input id="cardnumber" name="cardnumber" type="text" placeholder="1234 5678 9012 3456"
            class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
    </div>

    <!-- Product Price -->
    <div class="mb-6">
        <label for="productprice" class="block text-gray-600 font-medium mb-2">Product Price</label>
        <input id="productprice" name="productprice" type="text" placeholder="$100"
            class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
    </div>

    <!-- Date Picker -->
    <div class="mb-6">
        <label for="date" class="block text-gray-600 font-medium mb-2">Select Date</label>
        <input id="date" name="date" type="text" placeholder="YYYY-MM-DD"
            class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
    </div>

    <!-- Payment Method -->
    <input type="hidden" name="payment_method" value="Visa">

    <!-- Pay Now Button -->
    <button type="submit"
        class="w-full py-4 bg-gradient-to-r from-primary to-secondary text-white rounded-lg font-medium hover:opacity-90 transition">
        Pay Now
    </button>
</form>

    </div>
  </div>

  <!-- Flatpickr Script -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    // Initialize Flatpickr
    flatpickr("#date", {
      enableTime: false,
      dateFormat: "Y-m-d",
      minDate: "today",
      theme: "material_blue",
    });
  </script>

</body>

</html>
