<!-- predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php

$testo = 'Ciao marco, come stai?';

$badword = $_GET['parola'];

$position = str_replace($badword, '***', $testo);

echo $position;
$lunghezza_paragrafo = strlen($testo);
echo ' lunghezza del paragrafo = ' . $lunghezza_paragrafo;

?>