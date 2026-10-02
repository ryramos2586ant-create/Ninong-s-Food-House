/* =========================================================
   NINONG'S FOOD - MULTI-PAGE SITE SCRIPT
========================================================= */

const navBar = document.getElementById("navBar");
const logoButton = document.getElementById("logoButton");
const signInButton = document.getElementById("signInButton");
const getStarted = document.getElementById("getStarted");

/* Navigation toggle */
if (logoButton && navBar) {
    logoButton.addEventListener("click", () => {
        const closed = navBar.classList.toggle("nav-closed");
        logoButton.classList.toggle("logo-closed", closed);
        logoButton.setAttribute("aria-expanded", String(!closed));
    });
}

/* Sign In */
if (signInButton) {
    signInButton.addEventListener("click", () => {
        window.location.href = "register.php";
    });
}

/* Get Started */
if (getStarted) {
    getStarted.addEventListener("click", () => {
        window.location.href = "register.php";
    });
}

/* Keyboard shortcut: Escape closes navigation */
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && navBar && logoButton) {
        navBar.classList.add("nav-closed");
        logoButton.classList.add("logo-closed");
        logoButton.setAttribute("aria-expanded", "false");
    }
});