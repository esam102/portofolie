<!DOCTYPE php>
<php lang="en">
<?php require "nav.php"  ?>

    <div class="contact">
<h1>Contact nemem met mij</h1>
<h2>nummer</h2>
<p>+3162498848</p>
<h2>email</h2>
<p><a href="mailto:9026055@student.zadkine.nl">9026055@student.zadkine.nl</a></p>
<h2>Github</h2>
<p><a href="https://github.com/esam102" target="_blank"><img class="logo-git"src="GitHub-Mark-ea2971cee799.png"  width="100"></a></p>
</div>
<div class="form">
<form>
    <input type="text" placeholder="username" name="gebruikersnaam" min="3" max="20" required>
    <input type="text" placeholder="email" name="gmail" min="3" max="25" required>
    <input type="number" placeholder="telefoon nummer" name="telefoon nummer">
    <input type="text" placeholder="bericht" name="bericht" min="5" max="100">
    <input type="submit">
      </form>
    </div>


    <button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<button id="dark-knop" onclick="toggel_dark_mode">dark mode</button>

<?php require "js.php" ?>

</body>
</php>