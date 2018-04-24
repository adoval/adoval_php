<?php

include 'automobiliai.php';

$automobilis1 = new Radar(
    '2018-04-23 11:30',
    'KCK913',
    100,
    3,
    0
);

$automobilis2 = new Radar(
    '2018-04-22 12:00',
    'JAA665',
    150,
    6,
    0
);

$automobilis3 = new Radar(
    '2018-04-21 14:00',
    'JAA155',
    200,
    7,
    0
);

$a = [
    new Radar(
        '2018-04-23 11:30',
        'KCK913',
        100,
        7,
        0
    ),
    new Radar(
        '2018-04-22 12:00',
        'JAA665',
        150,
        7,
        0
    ),
    new Radar(
        '2018-04-21 14:00',
        'JAA155',
        200,
        7,
        0
    )
];
