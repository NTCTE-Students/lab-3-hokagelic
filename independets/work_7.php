<?php
$string = "Привет мир, это тестовая строка";
$array = explode(' ', $string);
echo "Массив слов: " . implode(", ", $array);