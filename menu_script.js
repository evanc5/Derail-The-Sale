var Navigation = document.getElementsByTagName("nav")[0];
var _Main = document.getElementsByTagName("main")[0];
var _width = document.body.clientWidth;
var mobileNavOpen = new Boolean;
mobileNavOpen = false;
if (window.innerWidth < 1250) { Navigation.style.display = "none"; }


/* var onResize = function(e) {
    _width = e.target.outerWidth;
} */

function openNav() {
    //Navigation.style.display = "flex";
    Navigation.style.width = "250px";
    _Main.style.marginLeft = "250px";
    Navigation.style.display = "block";
    mobileNavOpen = true;
}

function closeNav() {
    Navigation.style.width = "0";
    Navigation.style.display = "none"; // nav children display = none? preserve animation?
    _Main.style.marginLeft = "0";
    mobileNavOpen = false;
    document.getElementsByTagName("main").style.margin = "0px 50px 0px 50px";
}

function MYonResize() {

    if (window.innerWidth > 1250) {
        Navigation.style.width = "100%";
        Navigation.style.display = "inline";

    } else {
        if (mobileNavOpen) {
            Navigation.style.display = "block";
            Navigation.style.width = "250px";
        } else {
            Navigation.style.display = "none";
            Navigation.style.width = 0;
        }
    }
}

window.addEventListener("resize", MYonResize);
//event lister is not working
/* window.addEventListener("resize", onResize);
if (_width > 1366) {
    Navigation.style.color = "yellow";
} */