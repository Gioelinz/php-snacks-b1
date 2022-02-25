<?php
/* Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$is_name = false;
$is_mail = false;
$is_age = false;


/* Controllo se è vuoto e poi controllo i singoli parametri */
if (empty($name) || empty($mail) || empty($age)) {
    echo 'Uno dei parametri è vuoto';
} else {
    if (strlen($name) > 3) {
        $is_name = true;
        echo 'Nome Corretto ';
    } else echo 'Nome non Corretto ';

    if (strpos($mail, '@') && strpos($mail, '.')) {
        $is_mail = true;
        echo 'Mail Corretta ';
    } else echo 'Mail non Corretta ';

    if (is_numeric($age) && $age > 0 && $age <= 99) {
        $is_age = true;
        echo 'Età Verificata';
    } else echo 'Età non Corretta';
}

/* Controllo che tutti i parametri siano passati con i booleani */

if ($is_name && $is_mail && $is_age) echo '<h1>Accesso Riuscito</h1>';
else echo '<h1>Accesso non Riuscito</h1>';
