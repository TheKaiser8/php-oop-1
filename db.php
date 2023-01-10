<?php
require_once __DIR__ . "/classes/Movie.php";
$genres_movie1 = ["Commedia"];
$genres_movie2 = ["Azione", "Drammatico"];

$movies = [
    new Movie("Tre uomini e una gamba", "Italiano", $genres_movie1, "98", "1997", "I tre amici Aldo, Giovanni e Giacomo si mettono in viaggio verso il sud Italia per il matrimonio di uno di loro con la futura moglie. Durante il tragitto il terzetto affronta varie peripezie, tra le quali l'incontro con una ragazza di cui Giovanni si innamora e il trasporto di una gamba di legno al suocero.", 4.5),
    new Movie("Top Gun: Maverick", "Inglese", $genres_movie2, "131", "2022", "Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento di carriera che metterebbe un freno alla sua libertà. Quando viene ri-chiamato ad addestrare i migliori allievi Top Gun per una missione specializzata che nessuno al mondo ha mai portato a compimento, Maverick incontra il Tenente Bradley Bradshaw, nome in codice “Rooster”: è il figlio di Nick , il compianto “Goose.” Alle prese con un futuro incerto e con i fantasmi del passato, Maverick deve confrontarsi con le sue paure più profonde, fino ad una missione che richiederà il sacrificio ultimo di quelli che sceglieranno di parteciparvi.", 3.9),
];

var_dump($movies);
