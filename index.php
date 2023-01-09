<?php
require_once __DIR__ . "/db.php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Lista di Film</h1>
    <ul>
        <li>
            <h2><?php echo $movie_1->title ?></h2>
            <h3><?php echo $movie_1->subTitle ?></h3>
            <h3>Votazione utenti: <?php echo $movie_1->vote ?></h3>
            <div class="genre"><h3>Genere:</h3>
                <?php foreach ($movie_1->genre as $key) { ?>
                    <span class="type"><?php echo $key->type . ',' ?></span>
                <?php } ?>
            </div>
            <h3>Durata: <?php echo $movie_1->duration ?></h3>
            <h3>Anno di uscita: <?php echo $movie_1->releaseYear ?></h3>
        </li>
        <li>
            <h2><?php echo $movie_2->title ?></h2>
            <h3><?php echo $movie_2->subTitle ?></h3>
            <h3>Votazione utenti: <?php echo $movie_2->vote ?></h3>
            <div class="genre"><h3>Genere:</h3>
                <?php foreach ($movie_2->genre as $key) { ?>
                    <span class="type"><?php echo $key->type . ',' ?></span>
                <?php } ?>
            </div>
            <h3>Durata: <?php echo $movie_2->duration ?></h3>
            <h3>Anno di uscita: <?php echo $movie_2->releaseYear ?></h3>
        </li>
        <li>
            <h2><?php echo $movie_3->title ?></h2>
            <h3><?php echo $movie_3->subTitle ?></h3>
            <h3>Votazione utenti: <?php echo $movie_3->vote ?></h3>
            <div class="genre"><h3>Genere:</h3>
                <?php foreach ($movie_3->genre as $key) { ?>
                    <span class="type"><?php echo $key->type . ',' ?></span>
                <?php } ?>
            </div>
            <h3>Durata: <?php echo $movie_3->duration ?></h3>
            <h3>Anno di uscita: <?php echo $movie_3->releaseYear ?></h3>
        </li>
    </ul>
</body>
</html>