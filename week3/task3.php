<?php 
  echo '<h1>' ."Task 3 : ".'</h1>';
  $sum1 = array(2,3);
  $sum2 = array(2,3,4);
  $sum3 = array(2,3,4,5);

  function sum($sum){
    $total = 0;
    for($i = 0; $i < count($sum); $i ++){
        $total += $sum[$i];
    }
    return $total;
  }

    echo "sum(2,3) = " .sum($sum1) ."<br>";
    echo "sum(2,3,4) = " .sum($sum2) ."<br>";
    echo "sum(2,3,4,5) = " .sum($sum3) ."<br>";
?>
