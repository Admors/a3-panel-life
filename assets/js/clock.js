function updateClock() {
    const clock = document.getElementById('clock');
    if (clock) {
        const now = new Date();
        clock.textContent = now.toLocaleTimeString();
    }
}

setInterval(updateClock, 1000);
updateClock();
