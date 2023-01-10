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
        public $vote;

        public function __construct($_title, array $_genre, $_duration, $_year, $_vote)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->year = $_year;
            $this->vote = $this->setRating($_vote);
        }
        public function setRating($_vote)
        {
            if ($_vote <= 1) {
                return $this->vote = "Mediocre";
            } else if ($_vote > 1 && $_vote <= 2) {
                return $this->vote = "Discreto";
            } else if ($_vote > 2 && $_vote <= 3) {
                return $this->vote = "Buono";
            } else if ($_vote > 3 && $_vote <= 4) {
                return $this->vote = "Ottimo";
            } else if ($_vote > 4 && $_vote <= 5) {
                return $this->vote = "Eccellente";
            }
        }
    }

    $genre_1 = ["Commedia"];
    $movie_1 = new Movie("Tre uomini e una gamba", $genre_1, "98 min", "1997", 4.5);
    $movie_1->original_language = "Italiano";
    $movie_1->plot = "I tre amici Aldo, Giovanni e Giacomo si mettono in viaggio verso il sud Italia per il matrimonio di uno di loro con la futura moglie. Durante il tragitto il terzetto affronta varie peripezie, tra le quali l'incontro con una ragazza di cui Giovanni si innamora e il trasporto di una gamba di legno al suocero.";

    $genre_2 = ["Azione", "Drammatico"];
    $movie_2 = new Movie("Top Gun: Maverick", $genre_2, "131 min", "2022", 3.9);
    $movie_2->original_language = "Inglese";
    $movie_2->plot = "Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento di carriera che metterebbe un freno alla sua libertà. Quando viene ri-chiamato ad addestrare i migliori allievi Top Gun per una missione specializzata che nessuno al mondo ha mai portato a compimento, Maverick incontra il Tenente Bradley Bradshaw, nome in codice “Rooster”: è il figlio di Nick , il compianto “Goose.” Alle prese con un futuro incerto e con i fantasmi del passato, Maverick deve confrontarsi con le sue paure più profonde, fino ad una missione che richiederà il sacrificio ultimo di quelli che sceglieranno di parteciparvi.";

    var_dump($movie_1);
    var_dump($movie_2);
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Php OOP 1</title>
 </head>

 <body>
     <h1>FILMS:</h1>
     <ul>
         <li>
             <h2><?php echo $movie_1->title; ?></h2>
             <div>Lingua originale: <?php echo $movie_1->original_language; ?></div>
             <div>Genere: <?php echo $movie_1->genre; ?></div>
             <div>Durata:<?php echo $movie_1->duration; ?></div>
             <div>Anno di uscita: <?php echo $movie_1->year; ?></div>
             <p>Trama: <?php echo $movie_1->plot; ?></p>
             <div>Valutazione: <strong><?php echo $movie_1->vote; ?></strong></div>
         </li>
     </ul>
     <ul>
         <li>
             <h2><?php echo $movie_2->title; ?></h2>
             <div>Lingua originale: <?php echo $movie_2->original_language; ?></div>
             <div>Genere: <?php echo $movie_2->genre; ?></div>
             <div>Durata: <?php echo $movie_2->duration; ?></div>
             <div>Anno di uscita: <?php echo $movie_2->year; ?></div>
             <p>Trama: <?php echo $movie_2->plot; ?></p>
             <div>Valutazione: <strong><?php echo $movie_2->vote; ?></strong></div>
         </li>
     </ul>
 </body>

 </html>