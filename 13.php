<?php
    $s = 120;
    $t = 4;
    $speed_km_h = $s/$t;
    $speed_m_s = $s*1000/($t*60*60);
    echo "Скорость автомобиля на заданном участке: $speed_km_h км/час или $speed_m_s м/сек";