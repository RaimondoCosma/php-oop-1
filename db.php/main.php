<?php
require_once __DIR__ . "/classes/Movie.php";
require_once __DIR__ . "/classes/Genre.php";

$action = new Genre("Azione");
$fantasy = new Genre("Fantascienza");
$drama = new Genre("Drammatico");
$adventure = new Genre("Avventura");
$fantastic = new Genre("fantastico");
$comedy = new Genre("commedia");
$horror = new Genre("orrore");

$movies = [
    new Movie("Star Wars", "Episodio III - La vendetta dei Sith", 10, [$action, $fantasy, $drama, $adventure]),
    new Movie("Harry Potter", "L'ordine della fenice", 8, [$fantastic, $adventure, $drama, $action]),
    new Movie("Sharknado", null, 2, [$action, $comedy, $horror, $fantasy])
];

$movies[0]->plot = "Tre anni dopo lo scoppio delle guerre dei cloni tra la Repubblica Galattica e la Confederazione dei Sistemi Indipendenti, i capi dei separatisti, il Conte Dooku e il Generale Grievous, giungono a rapire il cancelliere supremo Palpatine e a sfidare le forze della Repubblica sui cieli di Coruscant.";
$movies[0]->duration = "140 min";
$movies[0]->releaseYear = 2005;

$movies[1]->plot = "Harry Potter e l'Ordine della Fenice (titolo originale in inglese: Harry Potter and the Order of the Phoenix) è il quinto romanzo della saga high fantasy Harry Potter, scritta da J. K. Rowling e ambientata principalmente nell'immaginario Mondo magico durante gli anni novanta del XX secolo.";
$movies[1]->duration = "137 min";
$movies[1]->releaseYear = 2007;

$movies[2]->plot = "Quando uno strano uragano colpisce Los Angeles, gli assassini piu' letali della natura governano il mare, la terra e l'aria. Migliaia di squali cominciano a terrorizzare la popolazione invasa dall'acqua";
$movies[2]->duration = "86 min";
$movies[2]->releaseYear = 2013;