function openNav() {

    if (window.getComputedStyle(document.querySelector('#mySidenav')).width === "0px") {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("navx").style.marginRight = "250px";
        document.getElementById("navx").style.opacity = ".5";
        document.getElementById("main").style.width = "calc(100% - 250px)";
        document.getElementById("main").style.marginRight = "250px";
        document.getElementById("main").style.overflow = "hidden";
        document.getElementById("backdrop").style.zIndex = "1045";
        document.getElementById("backdrop").style.backgroundColor = "rgba(0,0,0,0.5)";
    } else {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("navx").style.marginRight = "0";
        document.getElementById("navx").style.opacity = "1";
        document.getElementById("main").style.marginRight = "0";
        document.getElementById("main").style.overflow = "auto";
        document.getElementById("main").style.width = "100%";
        document.getElementById("backdrop").style.zIndex = "-1";
        document.getElementById("backdrop").style.backgroundColor = "rgba(0,0,0,0)";

    }

    document.getElementById("backdrop").onclick = function (event) {
        openNav();
    };

}
