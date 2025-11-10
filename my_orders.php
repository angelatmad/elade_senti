<?php include('header.php'); ?>

<div class="container account-page-container">
    
    <h1 class="page-main-title account-title">My Orders</h1>
    <p class="subtitle account-subtitle">Review the status and details of your recent purchases.</p>

    <div class="account-nav">
        <a href="account_settings.php" class="nav-link">Account Settings</a>
        <a href="my_orders.php" class="nav-link active">My Orders</a>
    </div>

    <div class="orders-list-wrapper">
        
        <div class="order-card completed">
            <div class="order-header">
                <span class="order-id">Order #ES-145789</span>
                <span class="order-date">Placed on: Nov 8, 2025</span>
                <span class="order-status completed">COMPLETED</span>
            </div>
            <div class="order-details">
                <p><strong>Items:</strong> 3 items (Lavender Candle, Rose Bath Bomb x2)</p>
                <p><strong>Total:</strong> ₱850.00</p>
                <p><strong>Shipping Address:</strong> 123 Main St., Cebu City</p>
            </div>
            <div class="order-actions">
                <button class="view-details-btn">View Details</button>
                <button class="re-order-btn"><i class="fas fa-redo"></i> Re-Order</button>
            </div>
        </div>

        <div class="order-card processing">
            <div class="order-header">
                <span class="order-id">Order #ES-145901</span>
                <span class="order-date">Placed on: Nov 10, 2025</span>
                <span class="order-status processing">PROCESSING</span>
            </div>
            <div class="order-details">
                <p><strong>Items:</strong> 1 item (Custom Name Necklace)</p>
                <p><strong>Total:</strong> ₱1,200.00</p>
                <p><strong>Payment:</strong> Gcash (Awaiting Confirmation)</p>
            </div>
            <div class="order-actions">
                <button class="view-details-btn">View Details</button>
                <button class="cancel-btn"><i class="fas fa-times"></i> Cancel Order</button>
            </div>
        </div>

        <div class="order-card shipped">
            <div class="order-header">
                <span class="order-id">Order #ES-145822</span>
                <span class="order-date">Placed on: Nov 5, 2025</span>
                <span class="order-status shipped">SHIPPED</span>
            </div>
            <div class="order-details">
                <p><strong>Items:</strong> 2 items (Miniature Terrarium, Tea Set)</p>
                <p><strong>Total:</strong> ₱1,650.00</p>
                <p><strong>Tracking:</strong> ABX123456</p>
            </div>
            <div class="order-actions">
                <button class="view-details-btn">View Details</button>
                <button class="track-btn"><i class="fas fa-map-marker-alt"></i> Track</button>
            </div>
        </div>

    </div>
    
</div>

<?php include('footer.php'); ?>