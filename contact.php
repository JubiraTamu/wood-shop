<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact section!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div id="navbar">

    </div>

    <section class="mb-12 ">
        <div class="h-[300px] w-full bg-cover rounded-lg bg-center bg-[url(https://frequip.com/wp-content/uploads/2024/07/Top-Furniture-Shops-in-Noida.jpg)]">
            <div class="pt-64 pl-20 text-white font-bold text-2xl ">
                <button class="hover:text-orange-300 "><a href="index.php">Home </a></button> /
                <button class="hover:text-orange-300"><a href="contact.php">Contact</a></button>         
            </div>
        </div>
    </section>
   
    <section>
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-4xl">
            <?php if(isset($_GET["failed"]) && $_GET["failed"] == "true" ) {?>
     <div class="denger pl-48 font-bold font-serif text-2xl pb-4 text-green-600">Your message has been sent successfully!</div>
    <?php } ?>
              <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 text-center">Contact Us</h1>
              <p class="text-gray-600 text-center mt-2">We want to hear from you!</p>
        
              <!-- Contact Form -->
              <form method="POST" action="contact_action.php" class="mt-8 space-y-4">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                  <input 
                  type="text" id="name" name="name" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800" 
                    placeholder="Joy Baidya" required
                  >
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                  <input 
                  type="email" id="email" name="email"  required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800" 
                    placeholder="you@gmail.com"
                  >
                </div>

                <div>
                  <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                  <input 
                   type="text" id="subject" name="subject"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800" 
                    placeholder="Subject" required
                  >
                </div>
        
                <div>
                  <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                  <textarea 
                    id="message" name="message"
                    rows="4" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800" 
                    placeholder="Write your message here..." required
                  ></textarea>
                </div>

                <div class="text-center">
                  <button 
                    type="submit" 
                    class="w-full lg:w-auto bg-blue-500 text-white font-medium py-2 px-6 rounded-md shadow hover:bg-blue-600 transition"
                  >
                    Send Message
                  </button>
                </div>
              </form>

              <div class="mt-10 border-t pt-6 text-gray-600 text-center space-y-4">
                <p><span class="font-semibold text-gray-800">Address:</span> Mirpur10, Dhaka, Bangladesh</p>
                <p><span class="font-semibold text-gray-800">Email:</span> joybaidyabd@gmail.com</p>
                <p><span class="font-semibold text-gray-800">Phone:</span> +8801865267895</p>
              </div>
            </div>
          </div>
    </section>

    <div id="footer">

    </div>
    

    <script src="javascript.js"></script>

</body>
</html>