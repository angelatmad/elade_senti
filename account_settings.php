<?php include('header.php'); ?>

<div class="container account-page-container">
    
    <h1 class="page-main-title account-title">Account Settings</h1>
    <p class="subtitle account-subtitle">Manage your personal information, security, and saved addresses.</p>

    <div class="account-nav">
        <a href="account_settings.php" class="nav-link active">Account Settings</a>
        <a href="my_orders.php" class="nav-link">My Orders</a>
    </div>

    <div class="account-settings-wrapper">
        
        <section class="settings-section profile-info-section">
            <h2><i class="fas fa-user-circle"></i> Profile Information</h2>
            <form id="profileInfoForm" class="settings-form">
                <div class="form-group-grid">
                    <div class="form-group">
                        <label for="profileFirstName">First Name</label>
                        <input type="text" id="profileFirstName" name="profileFirstName" value="Juana">
                    </div>
                    <div class="form-group">
                        <label for="profileLastName">Last Name</label>
                        <input type="text" id="profileLastName" name="profileLastName" value="Dela Cruz">
                    </div>
                </div>

                <div class="form-group">
                    <label for="profileEmail">Email Address (Read-Only)</label>
                    <input type="email" id="profileEmail" name="profileEmail" value="juana.dela.cruz@email.com" readonly>
                </div>
                
                <div class="form-group">
                    <label for="profilePhone">Phone Number</label>
                    <input type="tel" id="profilePhone" name="profilePhone" value="0917-000-0000">
                </div>
                
                <button type="submit" class="save-button cta-link">Save Profile</button>
            </form>
        </section>

        <section class="settings-section security-section">
            <h2><i class="fas fa-lock"></i> Password and Security</h2>
            <form id="passwordForm" class="settings-form">
                <div class="form-group">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" id="currentPassword" name="currentPassword" required>
                </div>
                <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm New Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                
                <button type="submit" class="save-button cta-link">Update Password</button>
            </form>
        </section>

        <section class="settings-section address-section">
            <h2><i class="fas fa-map-marker-alt"></i> Saved Shipping Addresses</h2>
            
            <div class="address-card default-address">
                <div class="address-details">
                    <span class="address-title">Default Address <i class="fas fa-check-circle"></i></span>
                    <p>Juana Dela Cruz, 0917-000-0000</p>
                    <p>Unit 2B, Sunshine Tower, Makati Ave., Makati City, 1200</p>
                </div>
                <div class="address-actions">
                    <button class="edit-address-btn"><i class="fas fa-edit"></i> Edit</button>
                    <button class="remove-address-btn"><i class="fas fa-trash"></i> Remove</button>
                </div>
            </div>

            <div class="address-card">
                <div class="address-details">
                    <span class="address-title">Home (Province)</span>
                    <p>Juana Dela Cruz, 0917-000-0000</p>
                    <p>Purok 5, Brgy. San Jose, Carmen, Cebu, 6000</p>
                </div>
                <div class="address-actions">
                    <button class="set-default-btn">Set Default</button>
                    <button class="edit-address-btn"><i class="fas fa-edit"></i> Edit</button>
                    <button class="remove-address-btn"><i class="fas fa-trash"></i> Remove</button>
                </div>
            </div>

            <button class="add-address-btn"><i class="fas fa-plus-circle"></i> Add New Address</button>
        </section>

    </div>
    
</div>

<?php include('footer.php'); ?>