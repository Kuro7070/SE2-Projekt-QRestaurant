
var open = 0


function openNav() {

    if (open === 0){
        open = 1
        document.getElementById("mySidenav").style.right= "0px";
        document.getElementById("backdrop").style.zIndex = "1045";
        document.getElementById("backdrop").style.backgroundColor = "rgba(0,0,0,0.5)";
    } else {
        console.log("test")
        open = 0
        document.getElementById("mySidenav").style.right = "-33vw";
        document.getElementById("backdrop").style.zIndex = "-1";
        document.getElementById("backdrop").style.backgroundColor = "rgba(0,0,0,0)";

    }

    document.getElementById("backdrop").onclick = function (event) {
        openNav();
    };

}
