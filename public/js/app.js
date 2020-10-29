require('./bootstrap');

//navbar js (L)
var mobileMenuButton = document.getElementById("mobileMenuButton");
mobileMenuButton.onclick = function() {
    document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
    document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-12");
    document.getElementById("sideMenuHideOnMobile").classList.toggle("shadow");
    document.getElementById("mobileMenuButtonClose").classList.toggle("hidden");
    document.getElementById("mobileMenuButtonOpen").classList.toggle("hidden");
}
  // Hide element when click outside nav
var theElementContainer = document.getElementsByTagName("nav")[0];
document.addEventListener('click', function(event) {
    if (!theElementContainer.contains(event.target)) {
        document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
        document.getElementById("sideMenuHideOnMobile").classList.remove("mt-12");
        document.getElementById("sideMenuHideOnMobile").classList.remove("shadow");
        document.getElementById("mobileMenuButtonOpen").classList.remove("hidden");
        document.getElementById("mobileMenuButtonClose").classList.add("hidden");
    }
});
