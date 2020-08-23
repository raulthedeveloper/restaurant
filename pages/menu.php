
<?php 
$page = 'secondary'; 
$title = 'Menu';
?>


<?php include '../includes/header.php'; ?>

<?php include '../includes/nav.php' ?>

<?php include '../functions/fetch_data.php' ?>

<?php include '../includes/secondary_header.php' ?>


<div class="container main-content">


<section id="breakfast_section" data-aos="fade-up">
 <h2 class="text-center text-dark display-4 mt-4">Breakfast</h2>
 <hr>

<?php getMeal('Breakfast'); ?>


</section>

<section id="lunch_section" data-aos="fade-up">
 <h2 class="text-center text-dark display-4 mt-4">Lunch</h2>
 <hr>

 <?php getMeal('Lunch'); ?>
 
 
</section>

<section id="dinner_section" data-aos="fade-up">
 <h2 class="text-center text-dark display-4 mt-4">Dinner</h2>
 <hr>

 <?php getMeal('Dinner'); ?>

  </div>
 </div>
</section>
 
</div>
<?php include '../includes/footer.php' ?>
