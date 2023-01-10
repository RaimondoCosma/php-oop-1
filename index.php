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
        <?php foreach($movies as $movie) { ?>
        <li>
            <h2><?php echo $movie->title ?></h2>
            <h3><?php echo $movie->subTitle ?></h3>
            <h3>Votazione utenti: <?php echo $movie->vote ?></h3>
            <div class="genre"><h3>Genere:</h3>
                <?php foreach ($movie->genre as $key) { ?>
                    <span class="type"><?php echo $key->type . ',' ?></span>
                <?php } ?>
            </div>
            <h3>Durata: <?php echo $movie->duration ?></h3>
            <h3>Anno di uscita: <?php echo $movie->releaseYear ?></h3>
        </li>
        <?php } ?>
    </ul>
</body>
</html>