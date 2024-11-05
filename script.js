// JavaScript for responsive menu
document.getElementById("menu-icon").addEventListener("click", function() {
    const navbar = document.querySelector(".navbar");
    navbar.style.display = navbar.style.display === "flex" ? "none" : "flex";
});
