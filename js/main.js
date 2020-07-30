window.onscroll = function() {scrollFunction()};

let lastPosition = 0;

let header = document.getElementsByTagName("header")[0];
let main = document.getElementsByTagName("main")[0];
let headersize = parseFloat(getComputedStyle(document.getElementById("header-title")).fontSize);
let emSize = parseFloat(getComputedStyle(document.documentElement).fontSize) + "px"; 

function scrollFunction() {
    let scrollPosition = Math.round(window.scrollY);
    if (scrollPosition > 0) {
      document.getElementById("top-nav").style.backgroundColor = "#0077AA";
      document.getElementById("nav-bar-title").style.visibility = "visible";
      document.getElementById("nav-bar-title").style.opacity = "1";
    }
    else {
      document.getElementById("top-nav").style.backgroundColor = "transparent";
      document.getElementById("nav-bar-title").style.visibility = "hidden";
      document.getElementById("nav-bar-title").style.opacity = "0";
    }

} 