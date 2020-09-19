<?php include $page == "primary" ? "functions/nav_links.php" : "../functions/nav_links.php" ;?>


<nav class="navbar navbar-expand-lg navbar-dark"  <?php nav_style(); ?>>
  <a class="navbar-brand" href="<?php echo $page == 'secondary' ? '../index.php' : null ?>">Navbar</a>
  <button class="navbar-toggler pb-sm-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link text-light" href="<?php nav_links() ?>pages/menu.php">MENU</a>
      <a class="nav-link text-light" href="<?php nav_links() ?>pages/catering.php">CATERING</a>
      <a class="nav-link text-light"  href="<?php nav_links() ?>pages/reservation.php">RESERVATION</a>
    </div>
  </div>
</nav>



<?php include  $page == 'primary' ? '../floating_button.php' : '../../floating_button.php' ?>



