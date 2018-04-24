<?php

include_once 'duomenys.php';

function greitis($a) {
    return ($a->distance / $a->time)*3.6;
}

usort($a, function($a, $b) {
    return $a->greitis = ($a->greitis < $b->greitis) ? -1 : 1;



});

foreach ($a as $a) {
    echo '<tr>';
    echo '<td>' . $a->date . '</td>';
    echo '<td>' . $a->number . '</td>';
    echo '<td>' . $a->distance . 'm' . '</td>';
    echo '<td>' . $a->time . 's' . '</td>';
    echo '<td>' . round(greitis($a), 1) . ' km/h' . '</td>';
    echo '</tr>';
}