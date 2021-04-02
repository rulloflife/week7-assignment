<?php
  echo '<h1>' ."Task 2".'</h1>';
  $welcome = "emocleW ot PHP";
  $cutwelcome = explode(" ",$welcome);
    echo strrev($cutwelcome[0]) ." " 
        .strrev($cutwelcome[1]) ." "
        .strrev($cutwelcome[2]) ." ";
?>
