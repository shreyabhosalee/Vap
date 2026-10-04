
function searchItems() {

    let search = document.getElementById("searchInput").value;

    if (search == "") {
        alert("Please enter an item to search.");
    }
    else {
        alert("Searching for: " + search);
    }

}

// Start Renting

function startRenting() {

    alert("Please login or register to start renting.");

}

const categoryButtons = document.querySelectorAll(".category");
const cards = document.querySelectorAll("#items .item-card");
const itemsTitle = document.getElementById("items-title");
const noItems = document.getElementById("no-items");

categoryButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        const selected = btn.dataset.category;

        // highlight the clicked button
        categoryButtons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        // show only matching cards
        let visible = 0;
        cards.forEach(card => {
            const show = selected === "All" || card.dataset.category === selected;
            card.style.display = show ? "" : "none";
            if (show) visible++;
        });

        itemsTitle.textContent = selected === "All" ? "Featured Rental Items" : selected;
        noItems.style.display = visible === 0 ? "block" : "none";

        document.getElementById("items").scrollIntoView({ behavior: "smooth" });
    });
});

