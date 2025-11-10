<?php
// loading.php - Updated with complex animation sequence
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading - Elade's Sentiment</title>
    <link rel="stylesheet" href="assets/style.css">
    <script>
        // Total time for all animations to complete before the final delay starts (approx 3.5s)
        const ANIMATION_DURATION = 3500; 
        // Final delay before redirecting (1-2 seconds, set to 1.5s here)
        const REDIRECT_DELAY = 1500; 

        setTimeout(() => {
            window.location.href = "login.php";
        }, ANIMATION_DURATION + REDIRECT_DELAY);
    </script>
</head>
<body class="loading-body">

<div class="loading-container">
    <div class="logo-animation-wrapper">
        <img src="images/EladeLogo.jpg" class="logo-animated" alt="Logo"> 
        
        <div class="logo-shadow"></div>
    </div>
    
    <h1 class="brand-text-animated">Elade’s Sentiment</h1>
</div>

</body>
</html>