<?php 
$random_number_array = range(0, 100);
shuffle($random_number_array );
$random_number_array = array_slice($random_number_array ,0,10);

$someJSON = json_encode($random_number_array);
  echo $someJSON;
?>