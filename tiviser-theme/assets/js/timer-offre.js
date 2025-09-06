// Timer functionality for countdown
function startCountdown() {
    // Set the date we're counting down to (24 hours from now)
    const countDownDate = new Date().getTime() + (24 * 60 * 60 * 1000);

    // Update the count down every 1 second
    const x = setInterval(function() {
        // Get today's date and time
        const now = new Date().getTime();
        
        // Find the distance between now and the count down date
        const distance = countDownDate - now;
        
        // Time calculations for hours, minutes and seconds
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Format numbers with leading zeros
        const formattedHours = hours.toString().padStart(2, '0');
        const formattedMinutes = minutes.toString().padStart(2, '0');
        const formattedSeconds = seconds.toString().padStart(2, '0');
        
        // Display the result in the elements with class "hours", "minutes", "seconds"
        const hoursElements = document.querySelectorAll('#hours, .hours');
        const minutesElements = document.querySelectorAll('#minutes, .minutes');
        const secondsElements = document.querySelectorAll('#seconds, .seconds');
        
        hoursElements.forEach(el => el.innerHTML = formattedHours);
        minutesElements.forEach(el => el.innerHTML = formattedMinutes);
        secondsElements.forEach(el => el.innerHTML = formattedSeconds);
        
        // If the count down is over, reset to 24 hours
        if (distance < 0) {
            clearInterval(x);
            startCountdown(); // Restart the countdown
        }
    }, 1000);
}

// Start countdown when page loads
document.addEventListener('DOMContentLoaded', function() {
    startCountdown();
});
