// --- Cart Management Functions (using Local Storage) ---

// Function to get the current cart contents from Local Storage
function getCart() {
    const cartJSON = localStorage.getItem('eladesCart');
    // If cartJSON exists, parse it; otherwise, return an empty array
    return cartJSON ? JSON.parse(cartJSON) : [];
}

// Function to save the current cart array to Local Storage
function saveCart(cart) {
    localStorage.setItem('eladesCart', JSON.stringify(cart));
}

// Function to update the cart count icon in the header (if you add a cart count later)
// function updateCartIconCount() {
//     const cart = getCart();
//     const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
//     // Assuming you have an element with ID 'cartItemCount' in your header
//     // const countElement = document.getElementById('cartItemCount');
//     // if (countElement) {
//     //     countElement.textContent = totalItems > 0 ? totalItems : '';
//     // }
// }


// --- Add Product Logic ---

function handleAddToCart(event) {
    // 1. Prevent default action (if the button was part of a form, for example)
    event.preventDefault(); 

    // Find the product card (the closest parent element with the class)
    const card = event.target.closest('.product-card') || event.target.closest('.product-card-v2');

    if (!card) {
        console.error("Could not find product card parent.");
        return;
    }
    
    // 2. Extract Product Data (using the attributes we added in product.php and index.php)
    
    // --- Data extraction is slightly different for each card type ---

    let name, priceText, category, imageUrl;

    if (card.classList.contains('product-card-v2')) {
        // Data extraction for product.php (product-card-v2)
        name = card.querySelector('.product-name-v2').textContent.trim();
        priceText = card.querySelector('.price-v2').textContent.trim();
        category = card.getAttribute('data-category');
        imageUrl = card.querySelector('img').src; 

    } else if (card.classList.contains('product-card')) {
        // Data extraction for index.php (featured-grid product-card)
        name = card.querySelector('h4').textContent.trim();
        priceText = card.querySelector('.product-bottom strong').textContent.trim();
        // Since featured products don't have a data-category, we can set a default or infer one
        category = 'Featured'; 
        imageUrl = card.querySelector('img').src; 
    } else {
        return; // Exit if card type is unknown
    }
    
    // Clean and convert price (e.g., "₱99.00" -> 99.00)
    const price = parseFloat(priceText.replace('₱', '').replace('P', '').replace(/,/g, ''));
    
    const productId = name.toLowerCase().replace(/\s+/g, '-') + '-' + price; // Create a simple unique ID

    // 3. Prepare the new item object
    const newItem = {
        id: productId,
        name: name,
        price: price,
        category: category,
        imageUrl: imageUrl,
        quantity: 1
    };

    // 4. Update the cart
    let cart = getCart();
    const existingItemIndex = cart.findIndex(item => item.id === productId);

    if (existingItemIndex !== -1) {
        // Item exists: increase quantity
        cart[existingItemIndex].quantity += 1;
    } else {
        // Item is new: add to cart
        cart.push(newItem);
    }

    // 5. Save and confirm
    saveCart(cart);
    
    // 6. Provide Visual Feedback (You'll need CSS for #cartConfirmation)
    showConfirmation(name);
    // updateCartIconCount();
}


// --- Confirmation Feedback Function ---
function showConfirmation(productName) {
    const confirmationElement = document.getElementById('cartConfirmation');
    if (!confirmationElement) return;

    confirmationElement.textContent = `"${productName}" added to cart!`;
    confirmationElement.classList.add('visible');

    // Hide the confirmation message after 3 seconds
    setTimeout(() => {
        confirmationElement.classList.remove('visible');
    }, 3000);
}


// --- Initialize Event Listeners ---
document.addEventListener('DOMContentLoaded', () => {
    // Select all Add to Cart buttons from both card types
    const addButtonsV1 = document.querySelectorAll('.product-bottom button');
    const addButtonsV2 = document.querySelectorAll('.add-to-cart-v2');

    // Attach the handler to all buttons
    [...addButtonsV1, ...addButtonsV2].forEach(button => {
        button.addEventListener('click', handleAddToCart);
    });
    
    // Initial update of cart count (if implemented)
    // updateCartIconCount(); 
});