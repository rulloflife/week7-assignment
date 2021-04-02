<?php
  echo '<h1>' ."Task 2" .'</h1>';
  $array = [2, 3, 4, 6, 7, 9, 11, 20];
  //array_filter is function that filter something that u want
  $even = array_filter($array,fn($num) => $num % 2 === 0);
  //<pre> for enter line of array
  echo '<pre>'; 
  var_dump ($even);
  echo '</pre>';
?>