
<?php $page = 'secondary'; ?>

<?php include '../includes/header.php'; ?>



<section id="catering_section_page">
 <?php include '../includes/nav.php' ?>

 <h1 class="text-center  title_h1"><?php echo "Catering" ?></h1>
 <div class="container">
  <div class="row" id="catering_row">
   <div class="col-md-6" id="cat_hero_img">
       <img src="../imgs/chef_cutout.png" alt="" width="400px">
   </div>

   <div class="col-lg-6 ">

    <div id="form_card" class="bg-dark">
     <div class="card_head">
      <h2 class="text-center">Book Our service</h2>
     </div>

     <form action="" method="post">

      <div class="container text-center" id="card_body">

       <div class="row">
       <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text">
         </div>
         
         <div class="form-group col-md-6 col-sm-12">
          <label for="name">Time and Date:</label>
          <input type="text">
         </div>
       </div>
      
       
       <div class="row">
       <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text">
         </div>
         
         <div class="form-group col-md-6">
          <label for="name">Time and Date:</label>
          <input type="text">
         </div>
       </div>
       
       
       <div class="row">
        <div class="col">
         <div class="form-group"><input type="submit" class="btn btn-danger"></div>
        </div>
       </div>
      </div>


     </form>
    </div>

   </div>
  </div>
 </div>
</section>

<section id="catering_page_service">
 <div class="container" id="catering_container">
  <div class="row">
   <div class="col">
    <div class="icon_container">
     <img src="https://img.icons8.com/offices/50/000000/cup.png">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aspernatur aut corrupti numquam ut nisi nostrum, obcaecati animi a ipsam id, alias! Vitae, ipsa quo incidunt eum error vel reprehenderit.</p>
    </div>

   </div>
   <div class="col">
    <div class="icon_container">
     <img src="../imgs/icons8-room-service-64.png">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aspernatur aut corrupti numquam ut nisi nostrum, obcaecati animi a ipsam id, alias! Vitae, ipsa quo incidunt eum error vel reprehenderit.</p>
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col">
    <div class="icon_container">
     <img src="../imgs/icons8-dining-room-64.png">

     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aspernatur aut corrupti numquam ut nisi nostrum, obcaecati animi a ipsam id, alias! Vitae, ipsa quo incidunt eum error vel reprehenderit.</p>
    </div>
   </div>
   <div class="col">
    <div class="icon_container">
     <img src="https://img.icons8.com/offices/64/000000/last-24-hours.png">

     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aspernatur aut corrupti numquam ut nisi nostrum, obcaecati animi a ipsam id, alias! Vitae, ipsa quo incidunt eum error vel reprehenderit.</p>
    </div>
   </div>
  </div>
 </div>
</section>

<?php include '../includes/footer.php'; ?>
