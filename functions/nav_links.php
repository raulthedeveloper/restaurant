<?php 
    function nav_links(){
        global $page;
        if($page == "primary"){
            echo null;
        }else if($page == "secondary"){
            echo "../";
        }
    }

    function nav_style(){
        global $page;
        if($page == 'secondary'){
            $nav = 'id="nav_secondary"';
            echo $nav;
          }elseif($page == 'primary'){
           $nav = 'id="nav_primary"';
          }elseif($page == 'catering'){
           $nav = 'id="nav_catering"';
           echo $nav;
          }
    }

?>


