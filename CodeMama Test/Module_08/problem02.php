<?php
$N = intval(trim(fgets(STDIN)));
$M = array_map('intval', explode(" ", trim(fgets(STDIN))));

$positiveCount = 0;
$negetiveCount = 0;

foreach($M as $num){
  if($num >= 0){
    $positiveCount++;
  }else{
    $negetiveCount++;
  }
}

if($positivCount > $negetiveCount){
  echo "Positivity \n";
}else{
  echo "Negetivity \n";
}