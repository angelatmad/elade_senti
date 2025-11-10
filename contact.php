<?php include('header.php'); ?>

<div class="container contact-page-container">

    <section class="contact-header">
        <h1 class="page-main-title">Design Your Custom Gift</h1>
        <p class="subtitle">Looking for something truly unique? Tell us your vision for a custom crochet piece, engraved jewelry, or personalized accessory, and we'll bring it to life.</p>
    </section>

    <section class="custom-order-form-wrapper">
        <form id="customOrderForm" class="custom-order-form">
            
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="orderType">What kind of Custom Order are you looking for? *</label>
                <select id="orderType" name="orderType" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="Crochet_Bouquet">Crochet Bouquet / Flower</option>
                    <option value="Personalized_Jewelry">Personalized Jewelry (e.g., engraving)</option>
                    <option value="Custom_Keychain">Custom Keychain / Accessory</option>
                    <option value="Other">Other / General Inquiry</option>
                </select>
            </div>

            <div class="form-group">
                <label for="budget">Approximate Budget (Optional)</label>
                <input type="text" id="budget" name="budget" placeholder="P500 - P1000">
            </div>

            <div class="form-group">
                <label for="details">Design Details & Request *</label>
                <textarea id="details" name="details" rows="6" required placeholder="Describe your request here. Include details like colors, specific flowers, text for engraving, preferred size, and the date you need it by."></textarea>
            </div>
            
            <button type="submit" class="submit-button">Submit My Custom Request</button>
            
        </form>

        <div id="successMessage" class="form-message-success">
            <h2>✨ Request Sent!</h2>
            <p>Thank you for reaching out! We will review your custom design details and contact you via email with a final quote within 1-2 business days.</p>
            <a href="product.php" class="back-to-shop-link">Continue Shopping</a>
        </div>

    </section>

</div>

<?php include('footer.php'); ?>

<script src="contact_form_handler.js"></script>