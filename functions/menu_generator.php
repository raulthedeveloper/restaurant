<?php

// Create an object to hold meal names and meal description
// Will Be replaced with Database in later Version
class Meal {
  public $name;
  public $description;

  function __construct($name,$description) {
    $this->name = $name; 
    $this->description = $description;
  }
  function get_name() {
    return $this->name;
  }
  function get_description() {
    return $this->description;
  }
}





 function createBreakfast(){
   $pancakes = new Meal("BUTTER MILK FLAPJACKS","Two flapjacks served with molasses and our signature sassafras-infused whipped cream.");
    $granny = new Meal("GRANNY’S","Filled with diced grilled ham, onions, green peppers, American cheese, cheese sauce and crispy hash browns. Topped with all of the same!");
    $everything = new Meal("THE EVERYTHING","Diced grilled ham, crimini mushrooms, tomatoes, onions, green peppers and American cheese – this classic omelet has it all!");
    $sausage = new Meal("TURKEY SAUSAGE","An egg white omelet filled with turkey sausage, crimini mushrooms, green bell peppers, onions, diced tomatoes, and Swiss cheese. Served with fresh fruit and dry whole wheat toast. No sides.");


   $meal = [$pancakes,$granny,$everything,$sausage];
 //Inserts html in breakfast section
  for($i=0; $i < count($meal); $i++){ 
 
 ?>
<div class="menu-item">
 <h5 class="text-left"><?php echo $meal[$i]->get_name();  ?> — 8</h5>
 <p class="text-left"><?php echo $meal[$i]->get_description(); ?></p>
</div>
<?php 
 }
}
 ?>

<?php
 function createLunch(){
   //Inserts html in lunch section
$pizza = new Meal("PIZZA","Warm cheese deliciousness");
$cornedBeefSandwitch = new Meal("CORNED BEEF SANDWICH",'Sandwich stuffed with corned beef');
$chickenSoup = new Meal("CHICKEN SOUP", 'Bone broth chicken and rosted vegatable soup');

   $meal = [$pizza,$cornedBeefSandwitch,$chickenSoup];

 for($i=0; $i < count($meal); $i++){ 
  
?>
<div class="menu-item">
 <h5 class="text-left"><?php echo $meal[$i]->get_name(); ?> — 10</h5>
 <p class="text-left"><?php echo $meal[$i]->get_description(); ?></p>
</div>
<?php 
 }
}
 ?>

<?php
 function createDinner(){
   //Inserts html in dinner section
$ribs = new Meal("BISON PRIME RIBS","10 oz. prime rib with red wine reduction. Served with asparagus, heirloom tomatoes, and roasted potatoes.");
$ribeye = new Meal("FT. WORTH RIBEYE","Very juicy and flavorful due to the marbling throughout the steak. Served with your choice of two sides. All sizes may not be available at all locations. 10 oz. / 12 oz. / 16 oz. portions.");
$steakKabob = new Meal("STEAK KABOB","Marinated steak with onion, mushroom, tomato, red pepper and green pepper served on a bed of seasoned rice with your choice of one side.");
$vegPlate = new Meal("COUNTRY VEG PLATE","Choose a total of 4 side items - one salad only, please.

");

$meal = [$ribs,$ribeye,$steakKabob,$vegPlate];
 for($i=0; $i < count($meal); $i++){
 
?>
<div class="menu-item">
 <h5 class="text-left"><?php echo $meal[$i]->get_name(); ?> — 15</h5>
 <p class="text-left"><?php echo $meal[$i]->get_description(); ?></p>
</div>
<?php 
 }
}

class TopDishes{
  public $name;
  public $description;

  function __construct($name,$description) {
    $this->name = $name; 
    $this->description = $description;
  }
  function get_name() {
    return $this->name;
  }
  function get_description() {
    return $this->description;
  }
}

function genTopDish(){
  $steak = new TopDishes('Steak',"Delicious grilled ribs glazed with garlic sauce.
  Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.");
  $chicken = new TopDishes('Roasted Chicken','Oven Roasted chicken, rubbed in a barbicue sauce
  that will make your mouth water.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat.');

  $ravioli = new TopDishes('Cheese Ravioli','Cheese ravioli mixed with an alfredo sauce.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat.');

  // Fix Problem with creating multiple rows
  $meal = [$steak,$chicken,$ravioli];
?>

  <div class="row fav_row">
  <?php
  for($i=0; $i < count($meal); $i++){
    
  
    ?>
   
   <div class="col-md-4 fav_col">
    <h2><?php echo $meal[$i]->get_name(); ?></h2>
    <p><?php echo $meal[$i]->get_description(); ?></p>
      
   </div>
   
    
    <?php 
     }?>
     </div>
     <?php
}

 ?>


