<?php 

$cateringPath = explode('/',$_SERVER['REQUEST_URI'])[count(explode('/',$_SERVER['REQUEST_URI'])) - 1];

    function nav_links(){
        global $path;
        if($path !== 'pages'){
            echo null;
        }else if($path === 'pages'){
            echo "../";
        }
    }

    function nav_style(){
        global $path;
        if($path === 'pages'){
            $nav = 'id="nav_secondary"';
            echo $nav;
          }elseif($path !== 'pages'){
           $nav = 'id="nav_primary"';
          }elseif(explode('.',$cateringPath)[0] == 'catering'){
           $nav = 'id="nav_catering"';
           echo $nav;
          }
    }

?>


