<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ninong's Food</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="menu-page inner-page">
<header class="navbar" id="siteNavbar">
    <button class="logo-wrap" id="logoButton" type="button" aria-label="Toggle navigation" aria-expanded="true">
        <span class="logo-ring"><span class="logo"><img src="images/NF New Logo.png" alt="Ninong's Food logo"></span></span>
    </button>
    <div class="nav-bar" id="navBar">
        <nav class="nav-links" aria-label="Main navigation">
            <a href="index.php">Home</a>
            <a href="menu.php" class="active">Menu</a>
            <a href="features.php">Features</a>
        </nav>
    </div>
    <button class="sign-in" id="signInButton" type="button">Sign In</button>
</header>
<main>
    <!-- =====================================================
         MENU
    ====================================================== -->

    <section
        class="menu-body"
        
    >

        <div class="menu-body-inner">

            <div class="section-kicker">
                NINONG'S FOOD™
            </div>

            <h2>
                Our Menu
            </h2>

            <p class="menu-subtitle">
                Delicious food made with care.
            </p>


            <div class="menu-cards">

                <!-- CARD 1 -->

                <article class="menu-card">

                    <div class="menu-card-image">

                        <img
                            src="images/food-1.jpg"
                            alt="Featured dish"
                        >

                    </div>

                    <div class="menu-card-content">

                        <h3>
                            Featured Dish
                        </h3>

                        <p>
                            Fresh ingredients and delicious flavors.
                        </p>

                        <span>
                            ₱250
                        </span>

                    </div>

                </article>


                <!-- CARD 2 -->

                <article class="menu-card">

                    <div class="menu-card-image">

                        <img
                            src="images/food-2.jpg"
                            alt="House special"
                        >

                    </div>

                    <div class="menu-card-content">

                        <h3>
                            House Special
                        </h3>

                        <p>
                            A delicious meal prepared with care.
                        </p>

                        <span>
                            ₱280
                        </span>

                    </div>

                </article>


                <!-- CARD 3 -->

                <article class="menu-card">

                    <div class="menu-card-image">

                        <img
                            src="images/food-3.jpg"
                            alt="Signature dish"
                        >

                    </div>

                    <div class="menu-card-content">

                        <h3>
                            Signature Dish
                        </h3>

                        <p>
                            One of our favorite dishes,
                            prepared with care.
                        </p>

                        <span>
                            ₱300
                        </span>

                    </div>

                </article>

            </div>

        </div>

    </section>




</main>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <span>Ninong's Food™</span>
            <small>Made with care, tradition, and good food.</small>
        </div>
        <nav class="footer-links" aria-label="Footer navigation">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="features.php">Features</a>
            <a href="register.php">Sign In</a>
        </nav>
        <div class="footer-bottom">
            <span>© 2026 Ninong's Food™</span>
            <span class="footer-dot">•</span>
            <span>All Rights Reserved.</span>
        </div>
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>