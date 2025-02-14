<!DOCTYPE php>
<php>
<head>
<title>Countdown</title>
<link rel="stylesheet" href="greeting.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="hamburger.css">
<link rel="stylesheet" href="dark-mode.css">
<style>
#countdown {
  font-size: 3em;
}
</style>
<?php require "nav.php" ?>
    
    <button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<button id="dark-knop" onclick="toggel_dark_mode">dark mode</button>


<body onload="displayTimeBasedGreeting()">
    <p id="greeting" class="greeting"></p>
  
    <script>
      const MORNING_START = 6;
      const AFTERNOON_START = 12;
      const EVENING_START = 18;
  
      function generateGreetingBasedOnTime() {
        const currentTime = new Date();
        const currentHour = currentTime.getHours();
  
        let greeting;
  
        if (currentHour >= MORNING_START && currentHour < AFTERNOON_START) {
          greeting = "Goedemorgen";
        } else if (currentHour >= AFTERNOON_START && currentHour < EVENING_START) {
          greeting = "Goedemiddag";
        } else if (currentHour >= EVENING_START) {
          greeting = "Goedenavond";
        } else {
          greeting = "Goedenacht";
        }
  
        return greeting;
      }
  
      function displayTimeBasedGreeting() {
        const greetingElement = document.getElementById("greeting");
        greetingElement.textContent = generateGreetingBasedOnTime() + "!";
      }
    </script>  
  </body>

<div class="countdown">
<h1>Countdown to New Year!</h1>
<div id="countdown" ></div>
</div>
<script>
let intervalId;

function countdown() {
    const targetDate = new Date("2025-01-01T00:00:00"); 
    const now = new Date();
    const timeLeft = targetDate.getTime() - now.getTime();

    if (timeLeft < 0) {
        clearInterval(intervalId);
        document.getElementById("countdown").innerphp = "Happy New Year!";
        return;
    }

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerphp = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
}


countdown();

intervalId = setInterval(countdown, 1000);

</script>

<script>
    
    function toggel_dark_mode () {
    document.getElementById("dark-mode").classList.toggle("dark-mode");
  }
    document.getElementById("dark-knop").addEventListener("click",toggel_dark_mode);
   
  
  
  </script>
  
  <script>
      
      function toggleMenu() {
      
        document.getElementById("mobile-nav").classList.toggle("show-mobile-nav");
      }
    </script>
  

</body>
</php>