const menuToggle = document.getElementById("menuToggle");
const mainNav = document.getElementById("mainNav");

if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", function () {
        mainNav.classList.toggle("show");
    });
}

document.querySelectorAll("#mainNav a").forEach(function (link) {
    link.addEventListener("click", function () {
        if (mainNav) mainNav.classList.remove("show");
    });
});

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (navbar) {
        navbar.style.boxShadow =
            window.scrollY > 30
                ? "0 10px 40px rgba(0,0,0,.35)"
                : "none";
    }
});
