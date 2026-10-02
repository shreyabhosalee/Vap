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
<!-- Rental Items -->

<section id="items" class="section">

    <div class="items-header">

        <h2>All items</h2>
 </div>

 <div class="items">


        <!-- Item 1 -->
<div class="item-card">

            <p class="category">Books</p>

            <h3>Engineering Mathematics </h3>

            <p>Owner: Meera</p>

            <p>Pickup: Library entrance</p>

            <div class="price">
                <strong>₹10</strong>
                <span>per day</span>
                <small>Deposit ₹100</small>
            </div>

        <button class="details-btn"
onclick="openRentPopup('Engineering Mathematics', 10, 100, 'Library entrance')">
    Request to rent
</button>

        </div>
 <!-- Item 2 -->

        <div class="item-card">

            <p class="category">Hostel & daily</p>

            <h3>Induction</h3>

            <p>Owner: Yash</p>

            <p>Pickup: Hostel C</p>

            <div class="price">
                <strong>₹50</strong>
                <span>per day</span>
                <small>Deposit ₹400</small>
            </div>

<button class="details-btn"
onclick="openRentPopup('Induction', 50, 400, 'Hostel C')">
    Request to rent
</button>

        </div>
 <!-- Item 3 -->

        <div class="item-card">

            <p class="category">Sports & events</p>

            <h3>Badminton rackets (pair)</h3>

            <p>Owner: Tanvi</p>

            <p>Pickup: Sports complex</p>

            <p class="requested">
                ✓ Your requested this
            </p>

            <div class="price">
                <strong>₹20</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

<button class="details-btn"
onclick="openRentPopup('Badminton rackets (pair)', 20, 200, 'Sports complex')">
    Request to rent
</button>

        </div>
 <!-- Item 4 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Canon 1500D DSLR</h3>

            <p>Owner: Ishan</p>

            <p>Pickup: Media club room</p>

            <div class="price">
                <strong>₹200</strong>
                <span>per day</span>
                <small>Deposit ₹3,000</small>
            </div>

           <button class="details-btn"
onclick="openRentPopup('Canon 1500D DSLR', 200, 3000, 'Media club room')">
    Request to rent
</button>
        </div>
  <!-- Item 5 -->

        <div class="item-card">

            <p class="category">Cycles & travel</p>

            <h3>Hero cycle with lock</h3>

            <p>Owner: Rohan</p>

            <p>Pickup: Hostel A parking</p>

            <div class="price">
                <strong>₹30</strong>
                <span>per day</span>
                <small>Deposit ₹500</small>
            </div>

          <button class="details-btn"
onclick="openRentPopup('Hero cycle with lock', 30, 500, 'Hostel A parking')">
    Request to rent
</button>

        </div>
  <!-- Item 6 -->
 
        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Raspberry Pi 4 (4 GB)</h3>

            <p>Owner: Nisha</p>

            <p>Pickup: Computer Lab</p>

            <div class="price">
                <strong>₹60</strong>
                <span>per day</span>
                <small>Deposit ₹800</small>
            </div>

          <button class="details-btn"
onclick="openRentPopup('Raspberry Pi 4 (4 GB)', 60, 800, 'Computer Lab')">
    Request to rent
</button>

        </div>
<!-- Item 7 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Arduino Uno starter kit</h3>

            <p>Owner: Kabir</p>

            <p>Pickup: Library entrance</p>

            <div class="price">
                <strong>₹40</strong>
                <span>per day</span>
                <small>Deposit ₹500</small>
            </div>

<button class="details-btn"
onclick="openRentPopup('Arduino Uno starter kit', 40, 500, 'Library entrance')">
    Request to rent
</button>

        </div>
  <!-- Item 8 -->

        <div class="item-card">

            <p class="category">Lab & drafting</p>

            <h3>Lab coat (size M)</h3>

            <p>Owner: Sneha</p>

            <p>Pickup: Girls hostel gate</p>

            <div class="price">
                <strong>₹10</strong>
                <span>per day</span>
                <small>Deposit ₹100</small>
            </div>

         <button class="details-btn"
onclick="openRentPopup('Lab coat (size M)', 10, 100, 'Girls hostel gate')">
    Request to rent
</button>

        </div>


        <!-- Item 9 -->

        <div class="item-card">

            <p class="category">Books</p>

            <h3>Engineering Physics</h3>

            <p>Owner: Varun</p>

            <p>Pickup: Physics lab</p>

            <div class="price">
                <strong>₹10</strong>
                <span>per day</span>
                <small>Deposit ₹100</small>
            </div>

           <button class="details-btn"
onclick="openRentPopup('Engineering Physics', 10, 100, 'Physics lab')">
    Request to rent
</button>

        </div>


        <!-- Item 10 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Casio fx-991EX calculator</h3>

            <p>Owner: Aarav</p>

            <p>Pickup: Hostel B</p>

            <div class="price">
                <strong>₹15</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

          <button class="details-btn"
onclick="openRentPopup('Casio fx-991EX calculator', 15, 200, 'Hostel B')">
    Request to rent
</button>

        </div>


    </div>

</section>

<<<<<<< HEAD
    <!-- How It Works -->

    <section class="how-it-works">

=======

    <!-- How It Works -->

    <section class="how-it-works">

>>>>>>> a488ebb (hello)
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

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> a488ebb (hello)
