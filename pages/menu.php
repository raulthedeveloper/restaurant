
<?php $page = 'secondary'; ?>


<?php include '../includes/header.php'; ?>

<?php include '../includes/nav.php' ?>
<div class="container main-content">

<?php include '../functions/menu_generator.php' ;?>

<section id="breakfast_section">
 <h2 class="text-center text-dark">Breakfast</h2>
 <hr>

 <div class="row">
  <div class="col-md-4 text-center center">
  
  
  <?php createBreakfast();?>
   
   
  </div>
  <div class="col-md-4 text-center center">
  
  <?php createBreakfast();?>
   
    </div>
 </div>
</section>

<section id="lunch_section">
 <h2 class="text-center text-dark">Lunch</h2>
 <hr>

 <div class="row">
  <div class="col-md-4 text-center center">
  
   <?php createLunch();?>
   
  </div>
  <div class="col-md-4 text-center center">
  
      <?php createLunch();?>

   
  </div>
  
 </div>
</section>

<section id="dinner_section">
 <h2 class="text-center text-dark">Dinner</h2>
 <hr>

 <div class="row">
 
  <div class="col-md-4 text-center center">
  <div class=menu-item>
   <?php createDinner(); ?>
   </div>
  </div>
  
  <div class="col-md-4 text-center center">
  <div class=menu-item>
   <?php createDinner(); ?>
  </div>
   
  </div>
 </div>
</section>
 
</div>
<?php include '../includes/footer.php' ?>
