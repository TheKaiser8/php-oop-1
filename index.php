 <?php
    require_once __DIR__ . "/db.php";
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Php OOP 1 - Movie</title>
 </head>

 <body>
     <h1>FILMS:</h1>
     <ul>
         <?php foreach ($movies as $movie) { ?>
             <li>
                 <h2><?php echo $movie->title; ?></h2>
                 <div>Lingua originale: <?php echo $movie->original_language; ?></div>
                 <div>
                     Genere:
                     <ul>
                         <?php foreach ($movie->genres as $genre) { ?>
                             <li>
                                 <?php echo ucfirst($genre); ?>
                             </li>
                         <?php } ?>
                     </ul>
                 </div>
                 <div>Durata: <?php echo $movie->duration; ?> min</div>
                 <div>Anno di uscita: <?php echo $movie->year; ?></div>
                 <p>Trama: <?php echo $movie->plot; ?></p>
                 <div>Valutazione: <strong><?php echo $movie->vote; ?></strong></div>
             </li>
         <?php } ?>
     </ul>
 </body>

 </html>