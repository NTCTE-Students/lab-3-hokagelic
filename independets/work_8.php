<?php
$numbers = [5, 3, 8, 1, 4];
sort($numbers);
echo "Отсортированный массив по возрастанию: " . implode(", ", $numbers);
rsort($numbers);
echo "\nОтсортированный массив по убыванию: " . implode(", ", $numbers);