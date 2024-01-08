// function to get the cuurrent time to display inside my small nav
function timer() {
    const currentTime = new Date();
    const hours = currentTime.getHours();
    const minutes = currentTime.getMinutes();
    const sec = currentTime.getSeconds();
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (sec < 10) {
        sec = "0" + sec;
    }
    const t_str = hours + ":" + minutes + ":" + sec + " ";
    document.getElementById("time").innerHTML = t_str;
    setTimeout(timer, 1000);
}

timer();
