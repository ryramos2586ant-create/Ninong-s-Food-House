<?php include('header.php'); ?>

<main>
    <!-- HERO SECTION -->
    <section class="hero-slider" id="heroSlider" aria-label="Ninong's Food showcase">
        <div class="hero-background" id="heroBackground">
            <img src="images/front.png" alt="Front of resto">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="slide-text">
                <h1>Ninong's Food House</h1>
                <p class="hero-description">
                    <?php echo 'Welcome to Ninong\'s Food House! We serve your desired favorite comforting classic Filipino meals, from the well loved satisfying classic "Silog" meals to flavorful daily snacks. We provide delicious, filling, appetizing, and budget-friendly snacks and full meals to satisfy your hunger or even your cravings at any time of the day.'; ?>
                </p>
                <a href="register.php" class="get-started" id="getStarted">
                    <span>Get Started</span>
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section> 

    <!-- THREE CONTAINERS -->
    <section class="box-container">
        <a href="menu.php" class="box-card">
            <div class="card-img-wrapper">
                <img src="images/sisigs.png" alt="Classic Silog">
            </div>
            <h3>Classic Sisig Rice</h3>
            <p>Satisfying and filling delicious clasic Sisig meal.</p>
        </a>

        <a href="menu.php" class="box-card">
            <div class="card-img-wrapper">
                <img src="images/shawarma.png" alt="shawarma">
            </div>
            <h3>Shawarma Rice</h3>
            <p>Delicious and savory shawarma rice.</p>
        </a>

        <a href="menu.php" class="box-card">
            <div class="card-img-wrapper">
                <img src="images/addons.png" alt="Add-ons">
            </div>
            <h3>Addons</h3>
            <p>Perfect addons to satisfy your cravings even more!</p>
        </a>
    </section>
</main>

<?php include('footer.php'); ?>
