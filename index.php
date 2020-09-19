<?php $page = 'primary'; ?>
<?php include 'functions/fetch_data.php'?>


<?php include 'includes/header.php' ?>
<section id="hero_section">

  <?php include 'includes/nav.php' ?>
  <div class="container">
    <div class="row" id="header_row" >
      <div class="col">
        <p class="text-light" data-aos="fade"  data-aos-delay="200" data-aos-duration="1000">How about you</p>
        <h1 id="main_header" data-aos="fade"  data-aos-delay="170" data-aos-duration="1000">Enjoy a Beautiful Evening With Us</h1>
       <a href="pages/reservation.php"><button >RESERVE TABLE</button></a> 
       <a href="pages/menu.php"><button >MENU</button></a> 
      </div>
    </div>
  </div>
</section>


<section id="about_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="about_col" data-aos="fade">
        <p id="about_p" class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>

  </div>
</section>

<section id="favorites">
  <div class="container pb-5" data-aos="fade">
    <h2 id="fav_h2"><em>Our Top Dishes-</em></h2>

     <?php topDishes('Top_dishes'); ?>

    <div class="row fav_row">

      

    </div>
       <a href="pages/menu.php"><button class="center">SEE MENU</button></a> 
  </div>
</section>

<section id="gallery">
  <div class="container-fluid " id="img_container">
    <div class="row">
      <div class="col-md-8 col-no-pad" data-aos="fade-right">
        <img class="big_pic fluid-img" src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
      </div>
      <div class="col-md-4 col-no-pad" data-aos="fade-left">
        <img class="small_pic fluid-img" src="https://images.pexels.com/photos/5938/food-salad-healthy-lunch.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        <img class="small_pic fluid-img" src="https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
      </div>
    </div>

    <div class="row mobile_hide">
      <div class="col-md-4 col-no-pad" data-aos="fade-right">

        <img class="small_pic fluid-img" src="https://images.pexels.com/photos/5938/food-salad-healthy-lunch.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        <img class="small_pic fluid-img" src="https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">


      </div>
      <div class="col-md-8 col-no-pad" data-aos="fade-left">
        <img class="big_pic fluid-img" src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
      </div>
    </div>

    <div class="row mobile_hide">
      <div class="col-md-6 col-no-pad" data-aos="fade-right">
        <img class="big_pic fluid-img" src="https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
      <div class="col-md-6 col-no-pad"  data-aos="fade-left"><img class="big_pic fluid-img" src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
    </div>

  </div>


</section>

<section id="catering_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <h2 class="text-dark">We also do Catering</h2>
        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-6 btn-col">
        <a href="pages/catering.php"><button class="center bg-dark text-light" data-aos="fade-left">LEARN MORE</button></a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php' ?>
