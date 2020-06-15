<!-- predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php

$testo = 'Ciao marco, come stai?';

$badword = $_GET['parola'];

$nuovo_testo = str_replace($badword, '***', $testo);

echo $nuovo_testo;
$tolgo_spazi = trim($nuovo_testo);
$lunghezza_paragrafo = strlen($nuovo_testo);
echo ' lunghezza del paragrafo = ' . $lunghezza_paragrafo;

?>