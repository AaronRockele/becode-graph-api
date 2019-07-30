<?php 
$randomArray2 = [];

for ($i=0; $i < 10 ; $i++) {
$randomNumber1 = mt_rand(0, 10);
$genArray1 = [$i, $randomNumber1];
array_push($randomArray2, $genArray1);

}

echo json_encode($randomArray2);
?>