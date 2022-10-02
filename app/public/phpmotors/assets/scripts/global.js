/**
 * Enables toggle menu in mobile view
 */
function toggleMenu() {
    let menu = document.getElementById("links");

    if (menu.className === "nav-links")
        menu.className += " show-nav";
    else
        menu.className = "nav-links";
}
