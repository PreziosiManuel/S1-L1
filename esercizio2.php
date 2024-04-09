<?php
// Array con le squadre di Serie A e relative formazioni (dati predefiniti)
$squadre_serie_a = [
    'Juventus' => ['Szczesny', 'De Ligt', 'Chiellini', 'Danilo', 'Bentancur', 'Locatelli', 'McKennie', 'Dybala', 'Morata', 'Kulusevski'],
    'Inter' => ['Handanovic', 'Skriniar', 'De Vrij', 'Bastoni', 'Brozovic', 'Vidal', 'Barella', 'Perisic', 'Lautaro Martinez', 'Dzeko'],
    'Milan' => ['Maignan', 'Calabria', 'Kjaer', 'Tomori', 'Hernandez', 'Kessie', 'Tonali', 'Bennacer', 'Messias', 'Leao', 'Rebic'],
];

// Stampa delle squadre e delle relative formazioni
foreach ($squadre_serie_a as $squadra => $formazione) {
    echo "Squadra: $squadra<br>";
    echo "Formazione:<br><ul>";
    foreach ($formazione as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul><br>";
}
?>