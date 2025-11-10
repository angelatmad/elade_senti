<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elade's Sentiment</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div id="cartConfirmation" class="cart-confirmation-message"></div> 
    
    <nav class="navbar">
        <div class="nav-left">
            <img src="images/EladeLogo.jpg" alt="Elade's Sentiment Logo" class="circular-logo">
        </div>

        <div class="nav-center-links">
            <a href="index.php">HOME</a>
            <a href="product.php">PRODUCT</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT</a>
        </div>

        <div class="nav-right-icons">
            
            <div class="search-box-styled">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            
            <a href="cart.php">
                <i class="fas fa-shopping-cart cart-icon"></i>
            </a>

            <div class="user-menu-wrapper">
                <i class="fas fa-user menu-icon" id="userMenuToggle"></i>
                
                <div class="account-dropdown" id="accountDropdown">
                    <a href="account_settings.php">Account Settings</a>
                    <a href="my_orders.php">My Orders</a>
                    <a href="login.php" class="logout-link">Log Out</a> 
                </div>
            </div>
            
        </div>
    </nav>