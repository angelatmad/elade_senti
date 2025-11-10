<?php include('header.php'); ?>

<div class="container">

    <div class="hero-section" style="background-image: url('images/eladebg.jpg');">
        
        <div class="hero-content centered-content">
            <h1 class="hero-headline">Handmade quality.</h1>
            <h2 class="hero-subheadline">Affordable charm.</h2>
            
            <a href="product.php" class="cta-link">Shop Now</a>
        </div>
        
    </div>

    <h2 class="section-title">FEATURED</h2>

    <div class="featured-grid">

        <div class="product-card" data-category="Featured">
            <img src="images/Featured - Flower Pink.png">
            <div class="stars">★★★★★</div>

            <h4>Forever Bloom</h4>
            <p>Hand–crocheted to last a lifetime.</p>

            <div class="product-bottom">
                <strong>₱99.00</strong>
                <button class="add-to-cart-v2">+</button>
            </div>
        </div>

        <div class="product-card" data-category="Featured">
            <img src="images/Featured - Flower Purple.png">
            <div class="stars">★★★★★</div>

            <h4>Lavender Dreams</h4>
            <p>Everlasting lavender & white bouquet.</p>

            <div class="product-bottom">
                <strong>₱99.00</strong>
                <button class="add-to-cart-v2">+</button>
            </div>
        </div>

        <div class="product-card" data-category="Featured">
            <img src="images/Featured - Watch Set.png">
            <div class="stars">★★★★★</div>

            <h4>Bold Essentials</h4>
            <p>Stainless watch & bracelet set.</p>

            <div class="product-bottom">
                <strong>₱299.00</strong>
                <button class="add-to-cart-v2">+</button>
            </div>
        </div>

        <div class="product-card" data-category="Featured">
            <img src="images/Featured - Keychains.png">
            <div class="stars">★★★★★</div>

            <h4>Anime Accessories</h4>
            <p>Custom keychains with beads & charms.</p>

            <div class="product-bottom">
                <strong>₱49.00</strong>
                <button class="add-to-cart-v2">+</button>
            </div>
        </div>

    </div>
    
    <h2 class="section-title">SHOP BY CATEGORIES</h2>

    <div class="categories-grid">

        <a href="product.php?category=Bouquets" class="category-link">
            <div class="category-card">
                <img src="images/Shop by Categories - Flowers.png">
                <h3>BOUQUETS</h3>
            </div>
        </a>

        <a href="product.php?category=Jewelries" class="category-link">
            <div class="category-card">
                <img src="images/Shop by Categories - Jewelries.png">
                <h3>JEWELRY</h3>
            </div>
        </a>

        <a href="product.php?category=Keychains" class="category-link">
            <div class="category-card">
                <img src="images/Shop by Categories - Keychains.png">
                <h3>KEYCHAINS</h3>
            </div>
        </a>

    </div>
</div>

<?php include('footer.php'); ?>