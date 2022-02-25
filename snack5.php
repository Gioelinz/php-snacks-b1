<?php
/* Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


$class = key($db) == 'teachers' ? 'gray' : 'green';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
    <style>
        div {
            height: 200px;
            width: 300px;
            text-align: center;
            color: red;
        }

        .gray {
            background-color: gray;
        }

        .green {
            background-color: green;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($db); $i++) :
        $current_db = key($db)
    ?>
        <h1><?= $current_db ?></h1>
        <div class="<?= $class ?>">
            <?php for ($y = 0; $y < count($db[$current_db]); $y++) : ?>
                <ul>
                    <li> <?= $db[$current_db][$y]['name'] ?></li>
                </ul>
            <?php endfor ?>
        </div>

    <?php
        next($db);
    endfor ?>
</body>

</html>