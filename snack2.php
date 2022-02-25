<?php
/* Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */

$posts = [

    '15/06/2020' => [
        [
            'title' => 'Post 1',
            'author' => 'Gioele Runza',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Salvo Pinco',
            'text' => 'Testo post 2'
        ],
    ],
    '11/07/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Pallo Paperino',
            'text' => 'Testo post 3'
        ]
    ],
    '23/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Francesco Baudo',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Maria Rossi',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Gallo',
            'text' => 'Testo post 6'
        ]
    ],
];

for ($i = 0; $i < count($posts); $i++) {
    $current_post = key($posts);
    echo $current_post . '<br/>';
    for ($y = 0; $y < count($posts[$current_post]); $y++) {
        echo $posts[$current_post][$y];
    }

    next($posts);
}
