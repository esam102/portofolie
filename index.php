<!DOCTYPE php>
<?php require "nav.php" ?>

    <button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<button id="dark-knop" onclick="toggel_dark_mode">dark mode</button>
        <div class="text">
            <h1>Welkom op mijn <span>website</span></h1>
            <p>Ik ben Essam Darwich en in deze website laat ik je zien wat ik kan en wie ik ben.</p>
            <a href="contact.php">Contact</a>
        </div>
<div class="foto"><img class="image" src="Clipped_image_20241107_125055 (2).png essam 3.png" width="500" alt=""></div>

<footer>
  <div class="cockie-wall" id="cookie-wall" >
    <h1>cookie-melding</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor modi ea odit facere eveniet, facilis magnam, pariatur velit quam qui dignissimos deleniti consectetur sit expedita nobis cupiditate vero? Ex, recusandae!</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam optio fugiat, quidem saepe ex corrupti nostrum veniam similique quibusdam doloribus sint architecto? Vero eveniet quasi, at omnis nam dolorum fuga?</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis iste ipsum incidunt illo earum accusamus cum quidem. Debitis nemo quas illum veniam, ex commodi? Quis et modi vitae voluptatem soluta.</p>

    <button  id="akkord-button">akkord</button>
    <button id="weigeren-button">weigeren</button>
</div>  
</footer>




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

<script>
    function toggle_cookie_wall () {
    
    document.getElementById("weigeren-button").style.display = 'none';

    document.getElementById("cookie-wall").style.display = 'none';
    document.getElementById("akkord-button").style.display = 'none';
    console.log("cookies zijn geweigwerd");
    }
    
    document.getElementById("weigeren-button").addEventListener("click",toggle_cookie_wall);
    document.getElementById("akkord-button").addEventListener("click",toggle_cookie_wall);
    
    </script>
    
</body>
</php>
