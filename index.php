<!-- predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php

$testo = 'Ciao Stronzo, come stai?';

var_dump($testo);

$badword = 'Stronzo';

$position = strpos($testo, $badword);

if ($position) {
    $badword = '***';
    $var = $_GET[$badword];
    echo $testo;
};


?>