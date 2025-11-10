document.addEventListener('DOMContentLoaded', () => {
    // Ensure core cart functions are available (assuming they are made global in cart.js)
    if (typeof getCart !== 'function') {
        console.error("Cart management functions (getCart, saveCart) are missing. Please ensure cart.js is linked before cart_display.js.");
        return;
    }
    
    // --- DOM Elements ---
    const itemsContainer = document.getElementById('cartItemsContainer');
    const emptyMessage = document.getElementById('emptyCartMessage');
    const subtotalElement = document.getElementById('subtotalAmount');
    const totalElement = document.getElementById('totalAmount');
    const itemCountSummaryElement = document.getElementById('itemCountSummary');
    const checkoutButton = document.getElementById('checkoutButton');
    const shippingAmountElement = document.getElementById('shippingAmount');

    // --- Constants ---
    const SHIPPING_FEE = 150.00; // Define the shipping fee here

    // --- Core Functions ---
    
    // Format price to Philippine Peso (₱)
    function formatPrice(price) {
        // Use a simple, reliable format for P.H. Pesos
        return '₱' + parseFloat(price).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    // Update the subtotal, total, and item count
    function updateSummary(cart) {
        // FIX: Use parseFloat to ensure item.price is treated as a number
        const subtotal = cart.reduce((sum, item) => sum + (parseFloat(item.price) * item.quantity), 0);
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        
        // Calculate shipping and total
        let shipping = 0;
        if (totalItems > 0) {
            shipping = SHIPPING_FEE;
            shippingAmountElement.textContent = formatPrice(shipping);
            checkoutButton.disabled = false;
        } else {
            shippingAmountElement.textContent = 'TBD';
            checkoutButton.disabled = true;
        }
        
        const total = subtotal + shipping;

        // Update DOM elements
        subtotalElement.textContent = formatPrice(subtotal);
        totalElement.textContent = formatPrice(total);
        itemCountSummaryElement.textContent = totalItems;
    }

    // Render the entire cart content
    function renderCart() {
        let cart = getCart();
        itemsContainer.innerHTML = ''; // Clear previous content

        if (cart.length === 0) {
            emptyMessage.style.display = 'block';
            updateSummary(cart);
            return;
        }

        emptyMessage.style.display = 'none';
        
        // Create the main table structure for display
        const cartTable = document.createElement('table');
        cartTable.className = 'cart-table';
        cartTable.innerHTML = `
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody></tbody>
        `;
        const tbody = cartTable.querySelector('tbody');

        cart.forEach(item => {
            const row = document.createElement('tr');
            row.setAttribute('data-id', item.id);
            
            // Get clean price and total for rendering
            const itemPrice = parseFloat(item.price);
            const itemTotal = itemPrice * item.quantity;
            
            // NOTE: Added data-label attribute to <td> for responsive CSS handling
            row.innerHTML = `
                <td class="product-col" data-label="Product">
                    <img src="${item.imageUrl}" alt="${item.name}">
                    <div class="product-info">
                        <h4>${item.name}</h4>
                        <p>${item.category}</p>
                    </div>
                </td>
                <td data-label="Price">${formatPrice(itemPrice)}</td>
                <td data-label="Quantity">
                    <div class="quantity-controls">
                        <button class="qty-btn minus-btn" data-id="${item.id}">-</button>
                        <input type="number" class="qty-input" value="${item.quantity}" min="1" readonly>
                        <button class="qty-btn plus-btn" data-id="${item.id}">+</button>
                    </div>
                </td>
                <td data-label="Total"><strong class="item-total">${formatPrice(itemTotal)}</strong></td>
                <td data-label="Remove">
                    <button class="remove-btn" data-id="${item.id}"><i class="fas fa-trash"></i></button>
                </td>
            `;
            tbody.appendChild(row);
        });

        itemsContainer.appendChild(cartTable);
        updateSummary(cart);
    }
    
    // --- Event Handlers for Cart Interaction ---
    
    itemsContainer.addEventListener('click', (event) => {
        const target = event.target;
        // Use closest() to find the button or parent with data-id
        const button = target.closest('.qty-btn') || target.closest('.remove-btn'); 
        if (!button) return;

        const productId = button.getAttribute('data-id');
        if (!productId) return; 

        let cart = getCart();
        const itemIndex = cart.findIndex(item => item.id === productId);
        if (itemIndex === -1) return;

        // 1. Handle Quantity Change
        if (button.classList.contains('plus-btn') || button.classList.contains('minus-btn')) {
            
            if (button.classList.contains('plus-btn')) {
                cart[itemIndex].quantity += 1;
            } else if (button.classList.contains('minus-btn')) {
                cart[itemIndex].quantity = Math.max(1, cart[itemIndex].quantity - 1);
            }
            
            // Update the display for the total of that item
            const row = button.closest('tr');
            const itemPrice = parseFloat(cart[itemIndex].price); // Ensure price is number
            const newTotal = itemPrice * cart[itemIndex].quantity;
            
            row.querySelector('.item-total').textContent = formatPrice(newTotal);
            row.querySelector('.qty-input').value = cart[itemIndex].quantity;
            
            saveCart(cart);
            updateSummary(cart);
        } 
        
        // 2. Handle Item Removal
        else if (button.classList.contains('remove-btn')) {
            cart.splice(itemIndex, 1); // Remove 1 element at the found index
            saveCart(cart);
            renderCart(); // Re-render the whole cart after removal
        }
    });

    // --- Add Event Listener for Checkout Button (Links to checkout.php) ---
    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => {
            // Only navigate if the cart is NOT empty
            if (!checkoutButton.disabled) {
                window.location.href = 'checkout.php';
            }
        });
    }

    // Initial render when the page loads
    renderCart();
});