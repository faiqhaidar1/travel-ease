let scrollTimeout;

window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");

    navbar.classList.add("blurred");

    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        navbar.classList.remove("blurred");
    }, 300);
});

window.addEventListener("load", function () {
    var berandaLink = document.querySelector(
        ".navbar-nav .nav-item:first-child .nav-link"
    );
    berandaLink.classList.add("active");
});

// Pop Up Modal Login

// Menampilkan modal login
function showLoginModal() {
    var modal = document.getElementById("loginModal");
    modal.style.display = "block";
}

// Menutup modal login
function closeLoginModal() {
    var modal = document.getElementById("loginModal");
    modal.style.display = "none";
}

// Menutup modal jika pengguna mengklik area di luar modal
window.onclick = function (event) {
    var modal = document.getElementById("loginModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// Pop Up Masuk

window.onload = function () {
    document.getElementById("popup").style.display = "flex";
};

// Close the popup
function closePopup() {
    document.getElementById("popup").style.display = "none";
}

// Switch between login and register forms
function switchToRegister() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registerForm").style.display = "block";
}

function switchToLogin() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("registerForm").style.display = "none";
}

// Button Slider

let currentGroup = 1;
let totalGroups = 2;

function moveSlide(direction) {
    const group1 = document.getElementById("group1");
    const group2 = document.getElementById("group2");

    // Saat tombol Next (ke kanan)
    if (direction === 1 && currentGroup === 1) {
        group1.classList.remove("card-container-show-left");
        group1.classList.add("card-container-show-right");
        group2.classList.remove("card-container-show-right");
        group2.classList.add("card-container-show-left");

        group1.classList.remove("card-container-active");
        setTimeout(() => {
            group1.style.display = "none"; // Menyembunyikan grup pertama
            group2.style.display = "flex"; // Menampilkan grup kedua
            group2.classList.add("card-container-active"); // Memulai animasi untuk grup kedua
        }, 1000); // Waktu animasi selesai

        currentGroup = 2; // Menyimpan status grup saat ini
    } else if (direction === -1 && currentGroup === 2) {
        group2.classList.remove("card-container-show-right");
        group2.classList.add("card-container-show-left");
        group1.classList.remove("card-container-show-left");
        group1.classList.add("card-container-show-right");

        group2.classList.remove("card-container-active");
        setTimeout(() => {
            group2.style.display = "none"; // Menyembunyikan grup kedua
            group1.style.display = "flex"; // Menampilkan grup pertama
            group1.classList.add("card-container-active"); // Memulai animasi untuk grup pertama
        }, 1000); // Waktu animasi selesai

        currentGroup = 1; // Menyimpan status grup saat ini
    }
}

// Learn More Deskription

function toggleText() {
    var description = document.querySelector(".text-description");
    description.classList.toggle("expanded");

    var learnMoreText = description.classList.contains("expanded")
        ? "Tampilkan Lebih Sedikit"
        : "Pelajari Lebih Lanjut";
    document.querySelector(".learn-more").innerText = learnMoreText;
}

// Menu tab

// Function to filter categories
function filterCategory(category) {
    // Get all the destination cards
    const cards = document.querySelectorAll(".card-destinasi");

    // Loop through all cards
    cards.forEach((card) => {
        // Get the category of the current card
        const cardCategory = card.getAttribute("data-category");

        // If the selected category is 'all', show all cards
        if (category === "all") {
            card.style.display = "block";
        } else {
            // Otherwise, check if the card's category matches the selected category
            if (cardCategory === category) {
                card.style.display = "block"; // Show the card
            } else {
                card.style.display = "none"; // Hide the card
            }
        }
    });

    // Update the active class for the buttons
    const buttons = document.querySelectorAll(".menu-btn");
    buttons.forEach((button) => {
        button.classList.remove("active");
    });

    // Set the active class on the selected button
    const activeButton = document.querySelector(
        `.menu-btn[onclick="filterCategory('${category}')"]`
    );
    if (activeButton) {
        activeButton.classList.add("active");
    }
}

// Optional: Toggle description text for "Learn More"
function toggleText() {
    const moreText = document.querySelectorAll(".more-text");
    moreText.forEach((text) => {
        text.classList.toggle("show");
    });
}
