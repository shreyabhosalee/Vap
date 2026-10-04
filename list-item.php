<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>List an Item - Campus Rental Hub</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="list-container">

    <h1>List an item</h1>

    <form action="#" method="POST">

        <!-- Item Name -->
        <div class="form-group">
            <label>Item name</label>
            <input 
                type="text" 
                name="item_name"
                placeholder="e.g. Casio fx-991EX calculator"
                required
            >
        </div>


        <!-- Category -->
        <div class="form-group">
            <label>Category</label>

            <select name="category" required>
                <option value="Electronics">Electronics</option>
                <option value="Books">Books</option>
                <option value="Study Tools">Study Tools</option>
                <option value="Engineering Instruments">
                    Engineering Instruments
                </option>
                <option value="Sports Equipment">
                    Sports Equipment
                </option>
                <option value="Other">Other</option>
            </select>
        </div>


        <!-- Price and Deposit -->
        <div class="form-row">

            <div class="form-group">
                <label>Price per day (₹)</label>

                <input 
                    type="number"
                    name="price"
                    placeholder="e.g. 50"
                    min="0"
                    required
                >
            </div>


            <div class="form-group">
                <label>Deposit (₹)</label>

                <input 
                    type="number"
                    name="deposit"
                    value="0"
                    min="0"
                >
            </div>

        </div>


        <!-- Name and Pickup -->
        <div class="form-row">

            <div class="form-group">
                <label>Your name</label>

                <input 
                    type="text"
                    name="owner_name"
                    placeholder="Enter your name"
                    required
                >
            </div>


            <div class="form-group">
                <label>Pickup spot</label>

                <input 
                    type="text"
                    name="pickup"
                    placeholder="e.g. Hostel B gate"
                    required
                >
            </div>

        </div>


        <!-- Buttons -->
        <div class="button-row">

            <a href="index.php" class="cancel-btn">
                Cancel
            </a>

            <button type="submit" class="list-btn">
                List item
            </button>

        </div>

    </form>

</div>

</body>
</html>