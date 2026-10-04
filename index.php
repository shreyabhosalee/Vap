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

<!-- ================= NAVBAR ================= -->

<header class="navbar">

    <!-- LOGO -->
    <div class="logo">
        <img src="logo.png" alt="Campus Rental Hub Logo">
        <span>Campus Rental Hub</span>
    </div>


    <!-- NAVIGATION -->
  <nav>
    <a href="#home">Home</a>
    <a href="#categories">Categories</a>
    <a href="#items">Browse Items</a>
</nav>


    <!-- LOGIN / REGISTER -->
    
    <div class="login-register">
        <a href="list-item.php" class="list-item-btn">List an Item</a>
        <a href="login.php" class="login">Login</a>
        <a href="register.php" class="register">Register</a>
    </div>



</header>
 <!-- HOME  -->

<section id="home" class="hero">

    <img src="Campus.jpeg" alt="Students using Campus Rental Hub">

<!-- CATEGORIES  -->

<section id="categories" class="categories">

    <div class="category-header">

        <div>
            <p class="small-title">
                START WITH A CATEGORY
            </p>

            <h2>
                What are you looking for?
            </h2>
        </div>

        <a href="#items" class="see-all">
            See all →
        </a>

    </div>

    <div class="category-list">

        <button class="category active" type="button" data-category="All"> All  </button>
        <button class="category" type="button" data-category="Books"> Books </button>
        <button class="category" type="button" data-category="Calculators"> Calculators </button>
        <button class="category" type="button" data-category="Cycles">Cycles</button>
        <button class="category" type="button" data-category="Electronics">Electronics</button>
        <button class="category" type="button" data-category="Furniture">Furniture</button>
        <button class="category" type="button" data-category="Hostel Essentials">Hostel Essentials</button>
        <button class="category" type="button" data-category="Lab Equipment">Lab Equipment</button>
        <button class="category" type="button" data-category="Others">Others</button>
 </div>
</section>
<!-- RENTAL ITEMS -->

<section id="items" class="items-section">

    <div class="items-header">
        <h2> Featured Rental Items</h2>
 </div>

 <div class="items">
 <!-- ITEM 1 -->

        <div class="item-card">

            <p class="item-category"> Books </p>
            <h3> Engineering Mathematics </h3>
            <p>  Owner: Meera   </p>
            <p> Pickup: Library entrance   </p>
            <div class="price">
               <strong>₹10</strong>
                  <span> per day </span>
                  <small>Deposit ₹100</small>
                  </div>

<button class="details-btn"
onclick="window.location.href='details.php?id=1'">
    Request to rent
</button>
</div>
 <!-- ITEM 2 -->

        <div class="item-card">
           <p class="item-category"> Hostel Essentials </p>
            <h3> Induction </h3>
            <p>  Owner: Veer   </p>
            <p> Pickup: Hostel C   </p>
            <div class="price">
               <strong>₹50</strong>
                  <span> per day </span>
                   <small>Deposit ₹400</small>
                    </div>
                    
<button class="details-btn"
onclick="window.location.href='details.php?id=2'">
    Request to rent
</button>
</div>
        <!-- ITEM 3 -->
 <div class="item-card">

            <p class="category">Sports & events</p>
            <h3>Badminton rackets (pair)</h3>
            <p>Owner: Tanvi</p>
            <p>Pickup: Sports complex</p>
             <div class="price">
                <strong>₹20</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

<button class="details-btn"
onclick="window.location.href='details.php?id=3'">
    Request to rent
</button>

        </div>
        <!-- ITEM 4 -->
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
onclick="window.location.href='details.php?id=4'">
    Request to rent
</button>
        </div>
<!-- ITEM 5 -->

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
onclick="window.location.href='details.php?id=5'">
    Request to rent
</button>
</div>
 <!-- ITEM 6 -->

        <div class="item-card">

            <p class="category">Books</p>

            <h3>Engineering Chemistry</h3>

            <p>Owner: Nisha</p>

            <p>Pickup: Chemistry Lab</p>

            <div class="price">
                <strong>₹10</strong>
                <span>per day</span>
                <small>Deposit ₹100</small>
            </div>

<button class="details-btn"
onclick="window.location.href='details.php?id=6'">
    Request to rent
</button>
 </div>
<!-- Item 7 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Electric kettle</h3>

            <p>Owner: Kabir</p>

            <p>Pickup: Library entrance</p>

            <div class="price">
                <strong>₹50</strong>
                <span>per day</span>
                <small>Deposit ₹500</small>
            </div>

<button class="details-btn"
onclick="window.location.href='details.php?id=7'">
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
onclick="window.location.href='details.php?id=8'">
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
onclick="window.location.href='details.php?id=9'">
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
onclick="window.location.href='details.php?id=10'">
    Request to rent
</button>

</div>
</div>
</section>

<footer>

    <div class="footer-logo">

        <img src="logo.png"
 alt="Campus Rental Hub Logo" >

        <span>
            Campus Rental Hub
        </span>

    </div>

<<<<<<< HEAD
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
=======
    <p>
        2026 Campus Rental Hub | Built for Students
>>>>>>> 7ab2583 (hello)
    </p>

</footer>

<script src="script.js"></script>

</body>
<<<<<<< HEAD

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> a488ebb (hello)
=======
</html>
>>>>>>> 7ab2583 (hello)
