<?php
$day = 9;
switch ($day >= 1 && $day  <= 5) {
    case 1: echo "Это рабочий день"; break;
    case 2: echo "Это рабочий день"; break;
    case 3: echo "Это рабочий день"; break;
    case 4: echo "Это рабочий день"; break;
    case 5: echo "Это рабочий день"; break;

}
switch ($day >= 6 && $day  <= 7) {
    case 1: echo "Это выходной день"; break;
    case 2: echo "Это выходной день"; break;
    default: echo "Это Неизвестный день"; break;
}
