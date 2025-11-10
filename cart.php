<?php include('header.php'); ?>

<div class="container cart-page-container">

    <h1 class="page-main-title cart-title">Your Shopping Cart</h1>
    <p class="subtitle cart-subtitle">Review your custom gifts and favorite accessories before checking out.</p>

    <div class="cart-content-wrapper">
        
        <div id="cartItemsContainer" class="cart-items-container">
            <div id="emptyCartMessage" class="empty-cart-message" style="display: none;">
                <i class="fas fa-shopping-bag empty-icon"></i>
                <p>Your cart is empty! Time to fill it with beautiful handmade gifts.</p>
                <a href="product.php" class="cta-link start-shopping-link">Start Shopping</a>
            </div>
        </div>

        <div class="cart-summary">
            <h2>Order Summary</h2>
            
            <div class="summary-line">
                <span>Subtotal (<span id="itemCountSummary">0</span> items)</span>
                <strong id="subtotalAmount">₱0.00</strong>
            </div>

            <div class="summary-line shipping-line">
                <span>Shipping Fee</span>
                <strong id="shippingAmount">TBD</strong> 
            </div>
            
            <div class="summary-line total-line">
                <h3>Estimated Total</h3>
                <strong id="totalAmount" class="total-price">₱0.00</strong>
            </div>
            
            <button id="checkoutButton" class="submit-button checkout-button" disabled>Proceed to Checkout</button>
            
            <p class="summary-note">Taxes and final shipping will be calculated at checkout based on your delivery address.</p>
        </div>
        
    </div>
    
</div>

<?php include('footer.php'); ?>

<script src="cart_display.js"></script>