
<?php $page = 'secondary'; ?>


<?php include '../includes/header.php'; ?>

<?php include '../includes/nav.php' ?>

<?php include '../functions/fetch_data.php' ?>


<div class="container main-content">

<?php include '../functions/menu_generator.php' ;?>

<section id="breakfast_section">
 <h2 class="text-center text-dark">Breakfast</h2>
 <hr>

<?php getMeal('Breakfast'); ?>


</section>

<section id="lunch_section">
 <h2 class="text-center text-dark">Lunch</h2>
 <hr>

 <?php getMeal('Lunch'); ?>
 
 
</section>

<section id="dinner_section">
 <h2 class="text-center text-dark">Dinner</h2>
 <hr>

 <?php getMeal('Dinner'); ?>

  </div>
 </div>
</section>
 
</div>
<?php include '../includes/footer.php' ?>
