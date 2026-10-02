<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninong's Food</title>
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=DM+Serif+Display&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="home-page">    
   
    <header class="navbar" id="siteNavbar">
        <button class="logo-wrap" id="logoButton" type="button" aria-label="Toggle navigation">
            <span class="logo-ring"><span class="logo"><img src="images/NF New Logo.png" alt="Ninong's Food logo"></span></span>
        </button>
        
        <div class="nav-bar" id="navBar">
            <nav class="nav-links" aria-label="Main navigation">
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                <a href="menu.php" class="<?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">Menu</a>
                <a href="features.php" class="<?php echo ($current_page == 'features.php') ? 'active' : ''; ?>">Features</a>
            </nav>
        </div>
        <button class="sign-in" id="signInButton" type="button">Sign In</button>
    </header>
