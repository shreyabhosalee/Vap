<?php

$items = [

    1 => [
        "name" => "Engineering Mathematics",
        "category" => "Books",
        "owner" => "Meera",
        "price" => 10,
        "deposit" => 100,
        "pickup" => "Library entrance"
    ],

    2 => [
        "name" => "Induction",
        "category" => "Hostel Essentials",
        "owner" => "Veer",
        "price" => 50,
        "deposit" => 400,
        "pickup" => "Hostel C"
    ],

    3 => [
        "name" => "Badminton rackets (pair)",
        "category" => "Sports",
        "owner" => "Tanvi",
        "price" => 20,
        "deposit" => 200,
        "pickup" => "Sports complex"
    ],

    4 => [
        "name" => "Canon 1500D DSLR",
        "category" => "Electronics",
        "owner" => "Ishan",
        "price" => 200,
        "deposit" => 3000,
        "pickup" => "Media club room"
    ],

    5 => [
        "name" => "Hero cycle with lock",
        "category" => "Cycles & Travel",
        "owner" => "Rohan",
        "price" => 30,
        "deposit" => 500,
        "pickup" => "Hostel A parking"
    ],

    6 => [
        "name" => "Engineering Chemistry",
        "category" => "Books",
        "owner" => "Nisha",
        "price" => 10,
        "deposit" => 100,
        "pickup" => "Chemistry Lab"
    ],

    7 => [
        "name" => "Electric kettle",
        "category" => "Electronics",
        "owner" => "Kabir",
        "price" => 50,
        "deposit" => 500,
        "pickup" => "Library entrance"
    ],

    8 => [
        "name" => "Lab coat (size M)",
        "category" => "Lab & Drafting",
        "owner" => "Sneha",
        "price" => 10,
        "deposit" => 100,
        "pickup" => "Girls hostel gate"
    ],

    9 => [
        "name" => "Engineering Physics",
        "category" => "Books",
        "owner" => "Varun",
        "price" => 10,
        "deposit" => 100,
        "pickup" => "Physics lab"
    ],

    10 => [
        "name" => "Casio fx-991EX calculator",
        "category" => "Electronics",
        "owner" => "Aarav",
        "price" => 15,
        "deposit" => 200,
        "pickup" => "Hostel B"
    ]
];


// Get item ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;


// Check item exists
if (!isset($items[$id])) {
    echo "Item not found.";
    exit;
}

$item = $items[$id];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $item['name']; ?> - Campus Rental Hub
    </title>

    <link rel="stylesheet" href="style.css">

</head>


<body>

<div class="rental-container">

    <a href="index.php" class="back-link">
        ← Back to items
    </a>


    <div class="rental-card">

        <div class="rental-left">

            <span class="category">
                <?php echo $item['category']; ?>
            </span>


            <h1>
                <?php echo $item['name']; ?>
            </h1>


            <p class="owner">
                Owner: <?php echo $item['owner']; ?>
            </p>


            <p class="pickup">
                 Pickup: <?php echo $item['pickup']; ?>
            </p>


            <h2 class="price">
                ₹<?php echo $item['price']; ?>
                <span>per day</span>
            </h2>


            <p class="deposit">
                Refundable Deposit:
                ₹<?php echo number_format($item['deposit']); ?>
            </p>

        </div>


        <div class="rental-right">

            <h2>Rent this item</h2>


            <div class="date-group">

                <div>
                    <label>From</label>

                    <input
                        type="date"
                        id="fromDate"
                        onchange="calculateRent()"
                    >
                </div>


                <div>
                    <label>Until</label>

                    <input
                        type="date"
                        id="untilDate"
                        onchange="calculateRent()"
                    >
                </div>

            </div>


            <div class="calculation">

                <div>
                    <span>Rent</span>

                    <strong id="rentAmount">
                        ₹0
                    </strong>
                </div>


                <div>
                    <span>Refundable deposit</span>

                    <strong>
                        ₹<?php echo number_format($item['deposit']); ?>
                    </strong>
                </div>


                <hr>


                <div class="total">

                    <span>Pay at pickup</span>

                    <strong id="totalAmount">
                        ₹<?php echo number_format($item['deposit']); ?>
                    </strong>

                </div>

            </div>


            <button
                class="send-request-btn"
                onclick="sendRequest()"
            >
                Send rental request
            </button>

        </div>

    </div>

</div>


<script>

const pricePerDay = <?php echo $item['price']; ?>;

const deposit = <?php echo $item['deposit']; ?>;


// Set today's date
let today = new Date().toISOString().split("T")[0];

document.getElementById("fromDate").min = today;
document.getElementById("untilDate").min = today;


function calculateRent() {

    let from = document.getElementById("fromDate").value;

    let until = document.getElementById("untilDate").value;


    if (!from || !until) {
        return;
    }


    let startDate = new Date(from);

    let endDate = new Date(until);


    let difference =
        endDate - startDate;


    let days =
        difference / (1000 * 60 * 60 * 24);


    if (days <= 0) {

        document.getElementById("rentAmount").innerText = "₹0";

        document.getElementById("totalAmount").innerText =
            "₹" + deposit;

        return;
    }


    let rent = days * pricePerDay;

    let total = rent + deposit;


    document.getElementById("rentAmount").innerText =
        "₹" + rent;


    document.getElementById("totalAmount").innerText =
        "₹" + total;
}


function sendRequest() {

    let from = document.getElementById("fromDate").value;

    let until = document.getElementById("untilDate").value;


    if (!from || !until) {

        alert("Please select From and Until dates.");

        return;
    }


    alert(
        "Rental request sent for <?php echo $item['name']; ?>!"
    );
}

</script>

</body>

</html>