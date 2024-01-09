

// function to get the cuurrent time to display inside my small nav
function timer() {
    
    const currentTime = new Date();
    let hours = currentTime.getHours();
    let minutes = currentTime.getMinutes();
    let sec = currentTime.getSeconds();
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (sec < 10) {
        sec = "0" + sec;
    }

    // display the current time in my span
    const time = document.querySelector('#time').innerHTML = hours + ":" + minutes + ":" + sec + " ";

    // get the seconds reading to show time
    setTimeout(timer, 1000);

}

timer();



// to show hamburger when scaled down

const menu = document.querySelector(".menu");
const hamburger = document.querySelector(".hamburger");
const closeIcon = document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  menu.classList.toggle("showMenu");
  closeIcon.style.display = menu.classList.contains("showMenu") ? "block" : "none";
  menuIcon.style.display = menu.classList.contains("showMenu") ? "none" : "block";
}

hamburger.addEventListener("click", toggleMenu);
