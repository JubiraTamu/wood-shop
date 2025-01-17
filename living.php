<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Living Space!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div id="navbar" class="sticky top-0 z-50">
    </div>
    <section class="mt-12 px-6">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <div>
                <img src="https://assets.epconcommunities.com/epcon-cms-prod-assets/image/1692207151592.jpg" alt="Living Furniture" 
                     class="w-full lg:w-[850px] lg:h-[300px] object-cover rounded-lg">
            </div>
            <div class="lg:pl-6 mt-6 lg:mt-12 text-center lg:text-left">
                <h1 class="font-bold font-serif text-3xl sm:text-4xl lg:text-5xl">Living Space Furniture</h1>
                <p class="font-semibold text-xl sm:text-2xl lg:text-3xl pt-2 font-mono">Innovative Excellence, Premium Living Furniture.</p>
                <p class="pt-2 text-sm sm:text-base font-normal">
                    Make a lasting executive presence with our Premium living Furniture collection.
                </p>
            </div>
        </div>
    </section>
    
    <section class="px-4 sm:px-6 lg:px-12">
        <div class="mt-10">
            <h1 class="text-center font-bold text-orange-700 text-2xl sm:text-3xl">Living Space Furniture</h1>
        </div>
        <!-- Grid Layout -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg3-rU_PwDcrUnpPM-_YRTmp2TcquUjXotwIAL0ZYQfPZh0UzRJxZnLHBx63is1e77xf4&usqp=CAU" alt="Dining Furniture 1" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">ComfortCrest Sofa</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:12500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(33)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('ComfortCrest sofa ', 12500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCOnWmFedPONE8NoFqYa4N4O5kFqMGd5Edg6oNe32HmuaNGuzbFE3KTD54piYYN2lttyg&usqp=CAU" alt="living Furniture 2" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">LuxeLounge Recliner</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:12000.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(34)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('Luxelounge ', 12000.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://fancyhouse-design.com/wp-content/uploads/2024/03/The-design-narrative-of-the-family-room-interior-blends-an-eclectic-mix-of-styles-for-a-unique-aesthetic.jpg" alt="living Furniture 3" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">Harmony Coffee </h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:13400.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(35)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('Harmony coffee table ', 13400.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://hips.hearstapps.com/hmg-prod/images/living-room-desig-ideas-655d38c1b117d.jpeg" alt="living Furniture 4" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">EvoShelf Unit</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:16400.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(36)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('EvoShelf Unit ', 16400.00 )"><a href="#">Add to cart</a></button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://bpioutdoorliving.com/wp-content/uploads/2022/07/Outdoor-fireplace-min.jpg" alt="Lining Furniture 5" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">CozyNest Armchair</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:14500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(37)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('CozyNest Acmchair ', 14500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.livingspaces.com/globalassets/images/inspiration/rooms/living/modern-living-room-with-japandi-sofa-loveseat-set_room.jpg?w=580&h=440&mode=pad" alt="lining Furniture 6" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">Vista TV Console</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:13500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(38)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('Vista Tv ', 13500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.livingspaces.com/globalassets/images/lp/2024/06/mariko/240604_mariko_image_concept_01_d.jpg" alt="Lining Furniture 7" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">ZenOttoman</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:15500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(39)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('ZenOttoman ', 15500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://lindyegalloway.com/wp-content/uploads/2019/10/lVY2QrOh-1-600x400.jpg" alt="Lining Furniture 8" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">Harmony Plush</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:15000.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800"  onclick="orderNow(40)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('Harmony plush ', 15000.00 )">Add to cart</button>
                     </div>
            </div>
        </div>
    </section>
    
    <div>
    <div id="cartModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center flex">
        <div class="bg-white w-96 p-6 rounded-md">
            <h3 class="text-lg font-bold mb-4">Cart Details</h3>
            <ul id="cartItems" class="mb-4">
                <!-- Cart items will be dynamically added here -->
            </ul>
            <div class="flex justify-between">
                <button class="bg-green-600 text-white px-4 py-2 rounded-md">
                    <a href="payment.php">Checkout</a>
                </button>
                <button class="bg-red-600 text-white px-4 py-2 rounded-md" onclick="toggleCart()">Close</button>
            </div>
        </div>
    </div>
    <!-- Cart badge -->
    <div class="fixed top-4 right-4">
        <button class="bg-gray-700 text-white px-4 py-2 rounded-md relative" onclick="toggleCart()">
            Cart <span id="cartBadge" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs w-5 h-5 rounded-full hidden flex items-center justify-center"></span>
        </button>
    </div>
</div>
   
    <div id="footer">

    </div>
    <script src="javascript.js"></script>
    <script src="product.js"></script>
    <script src="addToCart.js"></script>
</body>
</html>