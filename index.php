<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Rental Hub</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="Image.jpg/logo.png" alt="Campus Rental Hub logo">
            <span>Campus Rental Hub</span>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#categories">Categories</a>
            <a href="#items">Browse Items</a>
            <a href="#about">About</a>
        </nav>

        <div class="login-register">
            <a href="login.php" class="login">Login</a>
            <a href="register.php" class="register">Register</a>
            <a href="listitem.html" class="Listitem">List an item</a>
        </div>

    </header>
    <!-- Home Section -->
    <section class="hero">

        <div class="hero-image">
            <img src="Image.jpg/universityWebsite.jpeg" alt="Students">
        </div>
        <div class="hero-text">
            <div class="tag">Built for College Students</div>
            <h1>
                Rent Smarter.<br>
                <span>Live Better.</span>
            </h1>
            <p>
                Find affordable books, electronics, study
                equipment and more — all within your campus community.
            </p>
        </div>

        <form action="search.php" method="GET" class="search-box">

            <input type="text" name="search" placeholder="Search items">

            <button type="submit">Search</button>
        </form>

    </section>
    <section class="categories">
        <div class="category-header">
            <div>
                <p>START WITH A CATEGORY</p>
                <h2>What are you looking for?</h2>
            </div>

            <a href="">See all →</a>
        </div>
        <div class="category-list">
            <button class="category active" type="button" data-category="All">All</button>
            <button class="category" type="button" data-category="Books">Books</button>
            <button class="category" type="button" data-category="Calculators">Calculators</button>
            <button class="category" type="button" data-category="Cycles">Cycles</button>
            <button class="category" type="button" data-category="Electronics">Electronics</button>
            <button class="category" type="button" data-category="Furniture">Furniture</button>
            <button class="category" type="button" data-category="Hostel Essentials">Hostel Essentials</button>
            <button class="category" type="button" data-category="Lab Equipment">Lab Equipment</button>
            <button class="category" type="button" data-category="Others">Others</button>


        </div>
    </section>

    <section id="items" class="section">
        <h2 id="items-title">Featured Rental Items</h2>
        <div class="items">

            <div class="item-card" data-category="Books">
                <h3>Engineering Mathematics</h3>
                <p>Category: Books</p>
                <p>Location: Computer Department</p>
                <h4>40rs / day</h4>
                <a href="details.php?id=1" class="details-btn">View Details</a>
            </div>

            <div class="item-card" data-category="Electronics">

                <h3>HP Laptop</h3>
                <p>Category: Electronics</p>
                <p>Location: IT Department</p>
                <h4>250rs/day</h4>
                <a href="details.php?id=2" class="details-btn">View Details</a>
            </div>

            <div class="item-card" data-category="Calculators">

                <h3>Scientific Calculator</h3>
                <p>Category: Calculators</p>
                <p>Location: Mechanical Department</p>
                <h4>20rs / day</h4>
                <a href="details.php?id=3" class="details-btn">View Details</a>
            </div>

            <div class="item-card" data-category="Hostel Essentials">

                <h3>Lamp</h3>
                <p>Category: Hostel Essentials</p>
                <p>Location: Hostel room no.33</p>
                <h4>80rs/day</h4>
                <a href="details.php?id=4" class="details-btn">View Details</a>
            </div>

        </div>
        <p id="no-items" style="display:none;">No items in this category yet.</p>
    </section>


    <!-- How It Works -->

    <section class="how-it-works">

        <h2>How It Works</h2>

        <div class="steps">

            <div class="step">
                <h3>1. Find an Item</h3>
                <p>Search for the item you need.</p>
            </div>

            <div class="step">
                <h3>2. Send Request</h3>
                <p>Select the rental duration and contact the owner.</p>
            </div>

            <div class="step">
                <h3>3. Rent the Item</h3>
                <p>Collect the item and use it during your rental period.</p>
            </div>

        </div>

    </section>

    <!-- About -->

    <!-- <section id="about" class="about">

    <p>About Campus Rental Hub</p>

    <h2>
        Making Student Life
        <span>Affordable.</span>
    </h2>

    <p class="about-text">
        Campus Rental Hub connects students who need items
        with students who already have them. Share resources,
        reduce expenses and make campus life easier.
    </p>

    <button onclick="startRenting()">Start Renting</button>

</section> -->

    <footer>

        <div class="footer-logo">
            <img src="Image.jpg/logo.png" alt="Campus Rental Hub logo">
            <span>Campus Rental Hub</span>
        </div>

        <p>2026 Campus Rental Hub | Built for Students</p>

        <div>
            <a href="">Privacy</a>
            <a href="">Terms</a>
            <a href="">Contact</a>
        </div>

    </footer>

    <script src="script.js"></script>

</body>

</html>