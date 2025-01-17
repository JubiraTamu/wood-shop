
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full sm:w-11/12 md:w-9/12 lg:w-7/12">
  <?php if(isset($_GET["failed"]) && $_GET["failed"] == "true" ) {?>
     <div class="denger pl-12 font-bold font-serif text-xl text-red-500">Your Password don't match!</div>
    <?php } ?>
    
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Create an Account</h2>
    <form action="register_action.php" method="POST">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Joy.."
          class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@gmail.com"
          class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••"
          class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
      </div>

      <div class="mb-4">
        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="••••••••"
          class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
      </div>

      <div class="mb-4">
        <label for="role" class="block text-sm font-medium text-gray-700">Select Role</label>
        <select id="role" name="role"
          class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-red-400 focus:outline-none">
          <option value="user">User</option>
         
        </select>
      </div>

      <button type="submit"
        class="w-full py-2 px-4 bg-red-200 text-red-600 font-bold rounded-lg hover:bg-green-600 hover:text-white focus:ring-2 focus:ring-red-400 focus:ring-offset-2 focus:outline-none">
        Register
      </button>

      <!--Here we work Already have an account -->
      <p class="text-sm text-gray-600 text-center mt-4">
        Already have an account?
        <a href="login.php" class="text-red-500 font-semibold hover:underline">Log in</a>
      </p>
    </form>
  </div>

</body>
</html>