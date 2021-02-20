<?php 

$title = 'Reservation';

?>


<?php include '../includes/header.php' ?>


<?php include '../includes/nav.php' ?>

<?php include '../includes/secondary_header.php' ?>

<section id="reservation_section">
  <div class="container main-content">
    <div class="row">
      <div class="col-12" id="reserv_backround">
       
        <h2 class="text-dark">Resevations</h2>
        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          
          
      </div>
      <div class="col ">
        <form>
          <div class="form-row ">
           <div class="form-group col-md-6">
             <label for="first_name">First Name:</label>
            <input class="form-control" type="text" name="first_name">
           </div>
            <div class="form-group col-md-6">
              <label for="last_name">Last Name:</label>
            <input class="form-control" type="text" name="last_name">
            </div>
            
          
          
          <div class="form-group col-md-12">
            <label for="phone_number">Phone Number:</label>
            <input class="form-control" type="text" name="phone_number">
          </div>
          
          <div class="form-group col-md-12">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email">
          </div>
          
          <div class="form-group col-md-6">
            <label for="email">Date:</label>
            <input class="form-control" type="test" name="date">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Time:</label>
            <input class="form-control" type="test" name="date">
          </div>
          
          <div class="form-group col-md-12">
            <label for="email">Number of Guest:</label>
            <input class="form-control" type="test" name="guest">
          </div>
          
          <div class="form-group col-md-12">
            <label for="email">Comments:</label>
            <input class="form-control" type="text" name="comments">
          </div>
          
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
          
        </form>
      </div>
      
      

    </div>
  </div>
</section>
<?php include '../includes/footer.php' ?>