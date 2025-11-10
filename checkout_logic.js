document.addEventListener('DOMContentLoaded', () => {
    // Ensure core cart functions are available
    if (typeof getCart !== 'function') {
        console.error("Cart management functions (getCart) are missing. Please link cart.js before this script.");
        return;
    }

    // --- DOM Elements ---
    const itemsList = document.getElementById('checkoutItemsList');
    const subtotalEl = document.getElementById('checkoutSubtotal');
    const shippingEl = document.getElementById('checkoutShipping');
    const totalEl = document.getElementById('checkoutTotal');
    const itemCountEl = document.getElementById('checkoutItemCount');
    const placeOrderButton = document.getElementById('placeOrderButton');
    const shippingForm = document.getElementById('shippingForm');
    
    // --- Constants ---
    const SHIPPING_FEE = 150.00; 

    // Format price to Philippine Peso (₱)
    function formatPrice(price) {
        return '₱' + price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    // --- Core Functions ---
    
    function updateCheckoutSummary() {
        const cart = getCart();
        let subtotal = 0;
        let totalItems = 0;
        
        itemsList.innerHTML = ''; // Clear previous items

        if (cart.length === 0) {
            itemsList.innerHTML = '<p style="text-align:center; color: var(--soft-pink);">Your cart is empty! Redirecting to cart...</p>';
            // In a real app, you would redirect to cart.php here:
            // setTimeout(() => { window.location.href = 'cart.php'; }, 2000);
            placeOrderButton.disabled = true;
            return;
        }

        // Loop through cart items to build list and calculate totals
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            totalItems += item.quantity;

            const itemRow = document.createElement('div');
            itemRow.className = 'checkout-item-row';
            itemRow.innerHTML = `
                <span>${item.name} (x${item.quantity})</span>
                <strong>${formatPrice(itemTotal)}</strong>
            `;
            itemsList.appendChild(itemRow);
        });

        // Calculate final totals
        const total = subtotal + SHIPPING_FEE;

        // Update DOM elements
        subtotalEl.textContent = formatPrice(subtotal);
        shippingEl.textContent = formatPrice(SHIPPING_FEE); 
        totalEl.textContent = formatPrice(total);
        itemCountEl.textContent = totalItems;
        placeOrderButton.disabled = false;
    }

    // --- Place Order Logic ---
    placeOrderButton.addEventListener('click', (event) => {
        event.preventDefault();
        
        // 1. Validate Shipping Form
        if (!shippingForm.checkValidity()) {
            // Trigger browser's built-in validation messages
            shippingForm.reportValidity(); 
            return;
        }

        // 2. Gather Data
        const cart = getCart();
        const shippingData = new FormData(shippingForm);
        const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
        const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        
        const orderData = {
            cart: cart,
            shipping: Object.fromEntries(shippingData),
            paymentMethod: paymentMethod,
            subtotal: subtotal,
            shippingFee: SHIPPING_FEE,
            grandTotal: subtotal + SHIPPING_FEE
        };

        console.log("--- FINAL ORDER SUBMITTED ---");
        console.log(orderData);
        
        // 3. Final Order Action (Placeholder - Server-side required)
        // In a live system, you would use fetch() or AJAX here to send orderData to a PHP script
        // that saves the order to a database and sends confirmation emails.

        // 4. Client-side Success & Clear Cart
        alert("Order Placed Successfully! Thank you for shopping with Elade's Sentiment.");
        localStorage.removeItem('eladesCart'); // Clear the cart after successful order
        
        // Redirect to a confirmation/thank-you page
        window.location.href = 'thank_you.php'; 
    });

    // Run the summary update on page load
    updateCheckoutSummary();
});