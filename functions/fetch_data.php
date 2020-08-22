<?php

$restaurant_json = file_get_contents($page != 'primary' ? '../database/api.json' : 'database/api.json');
$json = json_decode($restaurant_json,true);

function getMeal($meals){
    global $page;
    global $restaurant_json;
    global $json;

    $output="<div class='row'>";

    foreach($json['entries'][$meals] as $meal){
      $output .='<div class="col-md-6 p-4">';
      $output .= '<h4 class="mb-3">' . $meal['name'] . "<span class=\"ml-4\">{$meal['price']}</span></h4>";
      $output .= '<p>' . $meal['description'] . '</p>';
      $output .= '</div>';
    }
    $output .= "</div>";
    echo $output;
    
}

function topDishes(){
    global $restaurant_json;
    global $json;
}



?>