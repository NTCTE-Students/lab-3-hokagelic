<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
echo "Объединенный массив: " . implode(", ", $mergedArray);