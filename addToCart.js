// Cart Array
let cart = [];

// Add to Cart Function
function addToCart(productName, price) {
    // Check if product already in cart
    const existingItem = cart.find(item => item.name === productName);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name: productName, price: price, quantity: 1 });
    }
    updateCartBadge();
}

// Update Cart Badge
function updateCartBadge() {
    const badge = document.getElementById('cartBadge');
    const cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);
    badge.textContent = cartCount;
    badge.classList.remove('hidden');
}

// Toggle Cart Modal
function toggleCart() {
    const modal = document.getElementById('cartModal');
    const cartItemsList = document.getElementById('cartItems');
    cartItemsList.innerHTML = ''; 

    if (cart.length === 0) {
        cartItemsList.innerHTML = '<li class="text-gray-500">Your cart is empty!</li>';
    } else {
        cart.forEach((item, index) => {
            const listItem = document.createElement('li');
            listItem.classList.add('flex', 'justify-between', 'items-center', 'py-2', 'border-b');
            listItem.innerHTML = `
                <div>
                    <span>${item.name} x ${item.quantity}</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-4">$${item.price * item.quantity}</span>
                    <button class="bg-red-500 text-white px-2 py-1 rounded-md" onclick="deleteCartItem(${index})">Delete</button>
                </div>
            `;
            cartItemsList.appendChild(listItem);
        });
    }
    modal.classList.toggle('hidden');
}

// Delete Cart Item
function deleteCartItem(index) {
    cart.splice(index, 1); // Remove the item at the specified index
    updateCartBadge(); // Update the cart badge count
    toggleCart(); // Refresh the cart modal
}

// Checkout Function
function checkout() {
    alert('Checkout: ' + JSON.stringify(cart, null, 2));
    cart = []; // Clear the cart
    updateCartBadge();
    toggleCart(); // Close the modal
}
