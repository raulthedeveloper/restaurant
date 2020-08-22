<?php 
if($page == 'secondary'){
  $nav = 'id="nav_secondary"';
}elseif($page == 'primary'){
 $nav = 'id="nav_primary"';
}elseif($page == 'catering'){
 $nav = 'id="nav_catering"';
}


?>



<nav class="nav navbar-expand-md ml-auto" <?php echo $nav; ?>>
<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navcol-1">
 <ul class="nav navbar-nav ml-auto">

  <li class="nav-item" role="presentation"><a id="index" class="nav-link" href="../index.php">HOME</a></li>
  <li class="nav-item" role="presentation"><a id="menu" class="nav-link" href="<?php if($page == 'secondary'){echo '../';} ?>pages/menu.php">MENU</a></li>
  <li class="nav-item" role="presentation"><a id="catering" class="nav-link" href="<?php if($page == 'secondary'){echo '../';} ?>pages/catering.php">CATERING</a></li>
  <li class="nav-item" role="presentation"><a id="catering" class="nav-link" href="<?php if($page == 'secondary'){echo '../';} ?>pages/reservation.php">RESERVATION</a></li>
 </ul>
 </div>
</nav>
