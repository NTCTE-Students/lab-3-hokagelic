<?php
// Создание многомерного массива
$data = [
    ['Имя', 'Возраст', 'Город'],
    ['Алексей', 25, 'Москва'],
    ['Мария', 30, 'Санкт-Петербург'],
    ['Иван', 22, 'Екатеринбург'],
    ['Елена', 28, 'Новосибирск']
];

// Начало HTML разметки для таблицы
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";

// Вывод заголовков таблицы
foreach ($data[0] as $header) {
    echo "<th>" . htmlspecialchars($header) . "</th>";
}
echo "</tr>";

// Вывод строк таблицы
for ($i = 1; $i < count($data); $i++) {
    echo "<tr>";
    foreach ($data[$i] as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";