<!DOCTYPE php>
<php lang="en">
<head>
    <?php require "nav.php" ?>

    
    <div class="about-me">
    <h1>Over mij</h1>
    <p>
        Mij naam is Essam darwich ik ben 17 jaar oud en ik kom uit syrie en op dit moment woon ik in rotterdam-noord
        en ik studeer opleding software devoloper
        en ik ben nu bezig met mij eerste project en ik hoop de docent die mij nu aan het controleren is, een hoge cijfer geeft. Mijn hobbies zijn voetballen, gamen en fietsen.
    </p>
    <h2 class="myskills">My skills</h2>
    <table>
   <tr>
    <th>
    </th>
    <th>1/5</th>
    <th>2/5</th>
    <th>3/5</th>
    <th>4/5</th>
    <th>5/5</th>
   </tr>
   <tr>
    <th>Arabisch</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>x</td>
   </tr>
   <tr>
    <th>Nederlands</th>
    <td></td>
    <td></td>
    <td></td>
    <td>x</td>
    <td></td>
   </tr>
   <tr>
    <th>Engels</th>
    <td></td>
    <td></td>
    <td>x</td>
    <td></td>
    <td></td>
   </tr>
</div>


<button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<button id="dark-knop" onclick="toggel_dark_mode">dark mode</button>

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