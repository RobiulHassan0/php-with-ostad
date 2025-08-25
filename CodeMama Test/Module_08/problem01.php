<?php

$N = intval(trim(fgets(STDIN)));
$num = array_map('intval', explode(" ", trim(fgets(STDIN))));
$P = intval(trim(fgets(STDIN)));

$found = false;

for($i = 0; $i < $N-2; $i++){
  for($j = $i+1; $j < $N-1; $j++){
    for($k = $j+1; $k < $N; $k++){
      if($num[$i] + $num[$j] + $num[$k] === $P){
        $triplet = [$num[$i], $num[$j], $num[$k]];
        sort($triplet);
        echo implode(" ", $triplet) . "\n";
        $found = true;
        break 3;
      }
    }
  }
}

if(!$found){
  echo "No Triplet Found!". "\n";
}



