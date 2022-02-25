<?php
/* Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo. */

$paragraph = 'I topi.non avevano nipoti.e neppure sorelle.ma avevano.fratelli';

$exploded = explode('.', $paragraph);

var_dump($exploded);

for ($i = 0; $i < count($exploded); $i++) {
    echo $exploded[$i] . '<br/>';
}
