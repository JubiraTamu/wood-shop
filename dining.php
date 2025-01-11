<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dining Space!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div id="navbar" class="sticky top-0 z-50">
    </div>
    <section class="mt-12 px-6">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <div>
                <img src="https://www.ikea.com/images/a-large-moerbylanga-table-sits-in-the-center-of-a-narrow-yet-48bba1099796dd75029db55896da6c1f.jpg" alt="Institutional Furniture" 
                     class="w-full lg:w-[850px] lg:h-[300px] object-cover rounded-lg">
            </div>
            <div class="lg:pl-6 mt-6 lg:mt-12 text-center lg:text-left">
                <h1 class="font-bold font-serif text-3xl sm:text-4xl lg:text-5xl">Dining Space Furniture</h1>
                <p class="font-semibold text-xl sm:text-2xl lg:text-3xl pt-2 font-mono">Innovative Excellence, Premium Dining Furniture Solutions</p>
                <p class="pt-2 text-sm sm:text-base font-normal">
                    Make a lasting executive presence with our Premium Dining Furniture collection.
                </p>
            </div>
        </div>
    </section>
    
    <section class="px-4 sm:px-6 lg:px-12">
        <div class="mt-10">
            <h1 class="text-center font-bold text-orange-700 text-2xl sm:text-3xl">Dining Space Furniture</h1>
        </div>
        <!-- Grid Layout -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://cdn.decorilla.com/online-decorating/wp-content/uploads/2023/12/2024-dining-room-trends-and-lighting-trends-scaled.jpeg?width=900" alt="Dining Furniture 1" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">HarvestTable</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:12500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(25)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('HarvestTable', 12500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.thespruce.com/thmb/ZqfUoFjPOAqtJBpzjDw-sxRdiNQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/modern-dining-room-ideas-4147451-hero-d6333998f8b34620adfd4d99ac732586.jpg" alt="Dining Furniture 2" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">FeastBench</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:12000.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(26)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('FeastBench', 12000.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.decorilla.com/online-decorating/wp-content/uploads/2021/10/modern-farmhouse-dining-room-ideas-.jpeg" alt="Dining Furniture 3" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">Elegance Dine Chair</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:13400.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(27)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('Elegance Dine', 13400.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://hips.hearstapps.com/hmg-prod/images/living-room-desig-ideas-655d38c1b117d.jpeg" alt="Dining Furniture 4" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">RoundGather Table</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:16400.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(28)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('RoundGather Table', 15000.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.ikea.com/images/a-large-skogsta-dining-table-in-wood-with-four-matching-chai-6c01807ec93b8c77ced18058b4fafd5a.jpg" alt="Dining Furniture 5" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">PlushSeat Dining Chair</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:14500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(29)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('PlusheSeat Dining', 14500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://cdn.shopify.com/s/files/1/0298/1577/files/Dining_Room_Furniture_Singapore_600x600.webp?v=1710835899" alt="Dining Furniture 6" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">RusticCharm Table</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:13500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(30)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200"onclick="addToCart('RusticCharm Table ', 13500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.ikea.com/ext/ingkadam/m/4e9d91fe42193dd8/original/PH200269.jpg" alt="Dining Furniture 7" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">ModDine Set</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:15500.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(31)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200"onclick="addToCart('ModDine ', 15500.00 )">Add to cart</button>
                     </div>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md text-center border">
                <img src="https://www.ikea.com/images/a-dining-room-containing-lots-of-plants-and-a-nackanaes-dini-cf450624b9adc0b8eafda7d0afc54d90.jpg" alt="Dining Furniture 8" 
                     class="h-[180px] sm:h-[200px] w-full object-cover rounded-md">
                     <div class="mt-2">
                        <h1 class="font-bold text-2xl text-orange-700">GlassGrace Table</h1>
                        <h2 class="font-medium text-lg text-orange-500">TK:15000.00</h2>
                     </div>
                     <div>
                        <button class="mt-2 bg-orange-600 px-12 py-1 rounded-lg text-white font-medium text-xl hover:bg-orange-800" onclick="orderNow(32)">Order Now</button>
                        <button class="mt-2 bg-amber-400 px-12 py-1 rounded-lg text-black font-medium text-xl hover:bg-amber-200" onclick="addToCart('GlassGrace Table', 15000.00 )">Add to cart</button>
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