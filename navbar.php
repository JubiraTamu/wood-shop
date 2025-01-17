<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="sticky top-0 z-50">
        <div>
            <nav class="flex justify-between items-center p-5  sm:px-20 md:px-28  lg:mx-auto lg:justify-between lg:items-center bg-yellow-700 rounded-lg">
                <div id="nav-links" class=" w-full  absolute  lg:static left-0 top-[-900%] mx-auto justify-between items-center">
                    <ul class="flex flex-col gap-y-4 py-6 md:py-0  lg:font-medium lg:flex-row  items-center lg:space-x-14 bg-yellow-700  text-white ">
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="index.php">HOME</a></li>
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="about.php">ABOUT</a></li>
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="service.php">SERVICES</a></li>
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="shop.php">SHOP</a></li>
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="blog.php">BLOGS</a></li>
                        <li class="hover:underline hover:text-orange-200 hover:font-extrabold"><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <div class="flex space-x-4">
                    <div class="relative">
                        <button id="dropdownButton" class="  focus:outline-none">
                            <a class="text-3xl cursor-pointer text-white font-medium rounded-md "><ion-icon name="person"></ion-icon></a>
                        </button>
                        <div id="dropdownMenu" class="absolute mt-5 w-44 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                            <?php session_start(); if (isset($_SESSION['user_id'])): ?> 
                                <a href="logout.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
                            <?php else: ?>
                                <a href="login.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Login</a>
                                <a href="registrationForm.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Create Account</a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="relative" onclick="toggleCart()">
                        <ion-icon class="text-3xl cursor-pointer text-white font-medium rounded-md " name="cart"></ion-icon><span id="cartBadge" class="absolute  cursor-pointer bg-yellow-800 text-white text-sm font-bold px-2 py-1 rounded-full ">0</span>
                    </div>
                </div>

                <div class="lg:hidden">
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl mr-8 lg:hidden text-white cursor-pointer "></ion-icon>
                </div>
            </nav>
        </div>
    </section>
    <script src="javascript.js"></script>
</body>

</html>