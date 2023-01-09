 <!-- Descrizione esercizio:
 Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

 <?php

    class Movie
    {
        public $title;
        public $original_language;
        public $genre;
        public $duration;
        public $year;
        public $plot;
    }

    $movie_1 = new Movie();
    $movie_1->title = "Tre uomini e una gamba";
    $movie_1->original_language = "Italiano";
    $movie_1->genre = "Commedia";
    $movie_1->duration = "98 min";
    $movie_1->year = "1997";
    $movie_1->plot = "I tre amici Aldo, Giovanni e Giacomo si mettono in viaggio verso il sud Italia per il matrimonio di uno di loro con la futura moglie. Durante il tragitto il terzetto affronta varie peripezie, tra le quali l'incontro con una ragazza di cui Giovanni si innamora e il trasporto di una gamba di legno al suocero.";

    $movie_2 = new Movie();
    $movie_2->title = "Top Gun: Maverick";
    $movie_2->original_language = "Inglese";
    $movie_2->genre = "Azione, Drammatico";
    $movie_2->duration = "131 min";
    $movie_2->year = "2022";
    $movie_2->plot = "Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento di carriera che metterebbe un freno alla sua libertà. Quando viene ri-chiamato ad addestrare i migliori allievi Top Gun per una missione specializzata che nessuno al mondo ha mai portato a compimento, Maverick incontra il Tenente Bradley Bradshaw, nome in codice “Rooster”: è il figlio di Nick , il compianto “Goose.” Alle prese con un futuro incerto e con i fantasmi del passato, Maverick deve confrontarsi con le sue paure più profonde, fino ad una missione che richiederà il sacrificio ultimo di quelli che sceglieranno di parteciparvi.";

    var_dump($movie_1);
    var_dump($movie_2);
