<?php include('header.php'); ?>

<div class="container checkout-page-container">

    <h1 class="page-main-title checkout-title">Finalize Your Order</h1>
    <p class="subtitle checkout-subtitle">Almost there! Please confirm your shipping details and payment method.</p>

    <div class="checkout-wrapper">
        
        <div class="checkout-form-area">
            
            <section class="shipping-section">
                <h2><i class="fas fa-truck"></i> Shipping Information</h2>
                <form id="shippingForm">
                    <div class="form-group-grid">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Street Address / House No. *</label>
                        <input type="text" id="address" name="address" required>
                    </div>

                    <div class="form-group-grid">
                        <div class="form-group">
                            <label for="city">City / Municipality *</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip Code *</label>
                            <input type="text" id="zip" name="zip" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notes">Order Notes (Optional)</label>
                        <textarea id="notes" name="notes" rows="3" placeholder="e.g., Leave the package with the guard, preferred delivery time, etc."></textarea>
                    </div>

                </form>
            </section>

            <section class="payment-section">
                <h2><i class="fas fa-credit-card"></i> Payment Method</h2>
                <div id="paymentOptions" class="payment-options">
                    
                    <label class="payment-option-card">
                        <input type="radio" name="payment" value="cod" checked>
                        <span class="custom-radio"></span>
                        <div class="payment-details">
                            <h4>Cash on Delivery (COD)</h4>
                            <p>Pay with cash upon delivery of your order.</p>
                        </div>
                    </label>

                    <label class="payment-option-card">
                        <input type="radio" name="payment" value="gcash">
                        <span class="custom-radio"></span>
                        <div class="payment-details">
                            <h4>Gcash / Bank Transfer</h4>
                            <p>Instructions for transfer will be provided after placing the order.</p>
                        </div>
                    </label>
                    
                </div>
            </section>
        </div>
        
        <div class="checkout-summary-area">
             <div id="checkoutSummaryContent">
                <h3>Your Order</h3>
                <div id="checkoutItemsList" class="checkout-items-list">
                    </div>

                <div class="summary-breakdown">
                    <div class="summary-line">
                        <span>Subtotal (<span id="checkoutItemCount">0</span> items)</span>
                        <strong id="checkoutSubtotal">₱0.00</strong>
                    </div>

                    <div class="summary-line">
                        <span>Shipping Fee</span>
                        <strong id="checkoutShipping">₱150.00</strong> </div>
                    
                    <div class="summary-line total-line">
                        <h3>Grand Total</h3>
                        <strong id="checkoutTotal" class="total-price">₱0.00</strong>
                    </div>
                </div>

                <button id="placeOrderButton" class="submit-button place-order-button">Place Order</button>
            </div>
        </div>

    </div>
    
</div>

<?php include('footer.php'); ?>

<script src="checkout_logic.js"></script>