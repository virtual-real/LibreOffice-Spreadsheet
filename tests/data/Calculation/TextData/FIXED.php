<?php

return [
    [
        123456.789,
        2,
        false,
        '123,456.79',
    ],
    [
        123456.789,
        1,
        true,
        '123456.8',
    ],
    [
        123456.789,
        2,
        true,
        '123456.79',
    ],
    [
        'ABC',
        2,
        null,
        '#NUM!',
    ],
    [
        123.456,
        'ABC',
        null,
        '#NUM!',
    ],
];
