// 1. Get DOM Elements
const menuToggle = document.getElementById('menuToggle'); // Hamburger icon
const categoryMenu = document.getElementById('categoryMenu'); // The menu overlay
const closeMenu = document.getElementById('closeMenu'); // 'X' close button
const productTitle = document.getElementById('productTitle'); // The H1 title
const categoryItems = document.querySelectorAll('.category-item'); // All category links
const productCards = document.querySelectorAll('.product-card-v2'); // All product cards

// 2. Menu Toggle Handlers
// Show the menu when the hamburger icon is clicked
menuToggle.addEventListener('click', () => {
    categoryMenu.classList.add('active'); // Add 'active' class to show it
});

// Hide the menu when the 'X' close icon is clicked
closeMenu.addEventListener('click', () => {
    categoryMenu.classList.remove('active'); // Remove 'active' class to hide it
});

// Optional: Hide the menu if the overlay itself is clicked (outside the content)
categoryMenu.addEventListener('click', (event) => {
    if (event.target.id === 'categoryMenu') {
        categoryMenu.classList.remove('active');
    }
});

// 3. Category Filtering Logic
categoryItems.forEach(item => {
    item.addEventListener('click', () => {
        // Hide the menu immediately after selection
        categoryMenu.classList.remove('active');
        
        const selectedCategory = item.getAttribute('data-category');
        
        // Update the H1 Title
        if (selectedCategory === 'all') {
            productTitle.textContent = 'PRODUCTS';
        } else {
            // This is the part that changes "PRODUCTS" to "Bouquets", etc.
            productTitle.textContent = selectedCategory.toUpperCase(); 
        }

        // Filter Products
        productCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            
            if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                // Show the card (make sure your CSS handles this)
                card.style.display = 'block'; 
            } else {
                // Hide the card
                card.style.display = 'none'; 
            }
        });
    });
});

// 4. New Function: Check URL on Load for Category Parameter
function checkURLForFilter() {
    // Get the full URL query string (e.g., "?category=Bouquets")
    const urlParams = new URLSearchParams(window.location.search);
    const initialCategory = urlParams.get('category'); // Gets the value of 'category'

    if (initialCategory && initialCategory !== 'all') {
        
        // Update the H1 Title
        productTitle.textContent = initialCategory.toUpperCase(); 

        // Filter Products
        productCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            
            // Check if the product card's category matches the URL category
            if (cardCategory === initialCategory) {
                card.style.display = 'block'; 
            } else {
                card.style.display = 'none'; 
            }
        });

    } else {
        // If 'category=all' or no category, show all products and set title to PRODUCTS
        productTitle.textContent = 'PRODUCTS';
        productCards.forEach(card => {
             card.style.display = 'block'; 
        });
    }
}

// Execute the filter check when the page loads
document.addEventListener('DOMContentLoaded', checkURLForFilter);