<!DOCTYPE php>
<php lang="en">
<?php require "nav.php" ?>

<div class="project">
    <h1>Mijn projecten</h1>
    <h2>project 1</h2> <img src="images.png" alt="">
    <h2>project 2</h2> <img src="images.png" alt="">
    <h2>project 3</h2> <img src="images.png" alt="">
</div>


<div class="knop">
<button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<button id="dark-knop" onclick="toggel_dark_mode">dark mode</button>
</div>
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