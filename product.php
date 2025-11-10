<?php 
    // Start session and include header
    session_start();
    require_once('header.php'); 

    // Define sample product data with 'category' and 'image' fields
    // NOTE: Ensure your images are in the 'images/' directory with these names!
    $products = [
        // Bouquets
        ['name' => 'Forever Bloom', 'price' => 'P99.00', 'rating' => 5, 'category' => 'Bouquets', 'image' => 'images/BOUQUETSforever.jpg'],
        ['name' => 'Lavender Dreams Bouquet', 'price' => 'P99.00', 'rating' => 4, 'category' => 'Bouquets', 'image' => 'images/LAVENDER.jpg'],
        ['name' => 'Green and Cream Rose Bouquet', 'price' => 'P99.00', 'rating' => 5, 'category' => 'Bouquets', 'image' => 'images/GREEN.jpg'],
        ['name' => 'Baby\'s Breath Photo Bouquet', 'price' => 'P99.00', 'rating' => 5, 'category' => 'Bouquets', 'image' => 'images/BABY.jpg'],
        ['name' => 'Graduation Heart Bouquet', 'price' => 'P99.00', 'rating' => 5, 'category' => 'Bouquets', 'image' => 'images/GRAD.jpg'],
        ['name' => 'Graduation White Rose Bouquet', 'price' => 'P99.00', 'rating' => 5, 'category' => 'Bouquets', 'image' => 'images/WHITE.jpg'],
        
        // Jewelries
        ['name' => 'Gold Essential Black-dial Watch', 'price' => 'P299.00', 'rating' => 5, 'category' => 'Jewelries', 'image' => 'images/GOLD.jpg'],
        ['name' => 'Silver-Toned Jewelry Set', 'price' => 'P399.00', 'rating' => 5, 'category' => 'Jewelries', 'image' => 'images/SILVER.jpg'],
        ['name' => 'Matching Couple Watch Set', 'price' => 'P299.00', 'rating' => 5, 'category' => 'Jewelries', 'image' => 'images/COUPLE.jpg'],
        ['name' => 'Blue Gemstone Jewelry Set', 'price' => 'P299.00', 'rating' => 5, 'category' => 'Jewelries', 'image' => 'images/BLUE.jpg'],
        ['name' => 'Black Stainless Steel Men\'s Set', 'price' => 'P299.00', 'rating' => 4, 'category' => 'Jewelries', 'image' => 'images/BLACK.jpg'],
        ['name' => 'Diamond Tone Jewelry Set', 'price' => 'P399.00', 'rating' => 5, 'category' => 'Jewelries', 'image' => 'images/DIAS.jpg'],

        // Keychains
        ['name' => 'Custom Anime Keychain', 'price' => 'P49.00', 'rating' => 5, 'category' => 'Keychains', 'image' => 'images/ANIME.jpg'],
        ['name' => 'Guitar Keychain Pair', 'price' => 'P49.00', 'rating' => 4, 'category' => 'Keychains', 'image' => 'images/SET.jpg'],
        ['name' => 'Rainbow Anime Keychains', 'price' => 'P49.00', 'rating' => 5, 'category' => 'Keychains', 'image' => 'images/RAIN.jpg'],
        ['name' => 'Crochet Rose Keychain', 'price' => 'P49.00', 'rating' => 5, 'category' => 'Keychains', 'image' => 'images/ROSE.jpg'],
    ];

    function generate_stars($rating) {
        $full = str_repeat('★', $rating);
        $empty = str_repeat('☆', 5 - $rating);
        return $full . $empty;
    }
?>

<div class="container">
    
    <div class="product-page-header">
        <h1 class="product-title" id="productTitle">PRODUCTS</h1>
        <i class="fas fa-bars menu-icon-page" id="menuToggle"></i>
    </div>
    
    <div class="category-menu-overlay" id="categoryMenu">
        <div class="category-menu-content">
            <i class="fas fa-times close-menu" id="closeMenu"></i>
            
            <ul class="category-list">
                <li class="category-item category-all" data-category="all">All Products</li> 
                <li class="category-item" data-category="Bouquets">Bouquets</li>
                <li class="category-item" data-category="Jewelries">Jewelries</li>
                <li class="category-item" data-category="Keychains">Keychains</li>
            </ul>
        </div>
    </div>
    <div class="product-grid-4col" id="productGrid">
        
        <?php foreach ($products as $i => $product): ?>
        <div class="product-card-v2 <?php echo strtolower($product['category']); ?>" 
             data-category="<?php echo $product['category']; ?>">
            
            <img src="<?php echo $product['image']; ?>" 
                 alt="<?php echo $product['name']; ?>">
            
            <div class="product-info-v2">
                <div class="stars-v2">
                    <?php echo generate_stars($product['rating']); ?>
                </div>

                <p class="product-name-v2"><?php echo $product['name']; ?></p>
                
                <div class="product-price-cart">
                    <span class="price-v2"><?php echo $product['price']; ?></span>
                    <button class="add-to-cart-v2">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>

            </div>
        </div>
        <?php endforeach; ?>

    </div>

</div>
<?php require_once('footer.php'); ?>
<script src="js/product_filter.js"></script>