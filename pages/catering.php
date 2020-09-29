<?php $page = 'secondary'; ?>

<?php include '../includes/header.php'; ?>



<section id="catering_section_page">
  <?php include '../includes/nav.php' ?>

  <h1 class="text-center text-light title_h1"><?php echo "Catering" ?></h1>
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
    <h2 class="text-center">Services</h2>
    <div class="row">
      <div class="col-md-6 col-sm-12">


        <div class="card">
          <div class="card-body text-center text-center">
            <div class="icon_container">
            <img src="../imgs/teamwork.png" alt="">
              <h5 class="card-title">Corporate Events</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="card-link">Learn More</a>
          </div>
        </div>



      </div>
      <div class="col-md-6 col-sm-12">

        <div class="card">
          <div class="card-body text-center">
            <div class="icon_container">
              <img src="../imgs\cake.png">
              <h5 class="card-title">Weddings</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
            </div>

            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="card-link">Learn More</a>
          </div>
        </div>

      </div>
    </div>

    <div class="row">



      <div class="col-md-6 col-sm-12">

        <div class="card">
          <div class="card-body text-center">
            <div class="icon_container">
              <img src="../imgs\confetti.png">
              <h5 class="card-title">Party</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
            </div>

            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="card-link">Learn More</a>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-12">

        <div class="card">
          <div class="card-body text-center">
            <div class="icon_container">
              <img src="..\imgs\presents.png">
              <h5 class="card-title">Holiday</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
            </div>

            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="card-link">Learn More</a>
          </div>
        </div>
      </div>




<div class="col-12 text-center">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div>

    </div>
</section>


<section id="catering_testimonial">
  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h1>What Customers are saying</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">

        <?php include "../includes/testimonial.php" ?>

      </div>
    </div>
  </div>
</section>

<section id="catering_booking">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-6 bg-light col-sm-12 text-box">
      <h2>Book Your Event Today</h2>
      <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque a ea qui natus voluptatem earum assumenda
        molestiae nobis minima quasi est ipsa suscipit vero voluptatum, atque, sapiente ipsam facilis eaque.</p>
    </div>

    <div class="col-md-6 col-sm-12 ">
    <?php include '../includes/form.php' ?>


    </div>
  </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>