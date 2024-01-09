

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
    const time = document.querySelector('#time').innerHTML = hours + ":" + minutes + ":" + sec + " ";
    setTimeout(timer, 1000);

}

timer();

// console.log('hello');
