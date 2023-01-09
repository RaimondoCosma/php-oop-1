<?php
require_once __DIR__ . "/classes/Movie.php";
require_once __DIR__ . "/classes/Genre.php";

$action = new Genre("azione");
$fantasy = new Genre("Fantascienza");
$drama = new Genre("Drammatico");
$adventure = new Genre("Avventura");
$fantastic = new Genre("fantastico");
$comedy = new Genre("commedia");
$horror = new Genre("orrore");

$movie_1 = new Movie("Star Wars", "Episodio III - La vendetta dei Sith", 10, [$action, $fantasy, $drama, $adventure]);
$movie_1->plot = "Tre anni dopo lo scoppio delle guerre dei cloni tra la Repubblica Galattica e la Confederazione dei Sistemi Indipendenti, i capi dei separatisti, il Conte Dooku e il Generale Grievous, giungono a rapire il cancelliere supremo Palpatine e a sfidare le forze della Repubblica sui cieli di Coruscant.";
$movie_1->duration = "140 min";
$movie_1->releaseYear = 2005;
var_dump($movie_1);

$movie_2 = new Movie("Harry Potter", "L'ordine della fenice", 8, [$fantastic, $adventure, $drama, $action]);
$movie_2->plot = "Harry Potter e l'Ordine della Fenice (titolo originale in inglese: Harry Potter and the Order of the Phoenix) è il quinto romanzo della saga high fantasy Harry Potter, scritta da J. K. Rowling e ambientata principalmente nell'immaginario Mondo magico durante gli anni novanta del XX secolo.";
$movie_2->duration = "137 min";
$movie_2->releaseYear = 2007;
var_dump($movie_2);

$movie_3 = new Movie("Sharknado", null, 2, [$action, $comedy, $horror, $fantasy]);
$movie_3->plot = "Quando uno strano uragano colpisce Los Angeles, gli assassini piu' letali della natura governano il mare, la terra e l'aria. Migliaia di squali cominciano a terrorizzare la popolazione invasa dall'acqua";
$movie_3->duration = "86 min";
$movie_3->releaseYear = 2013;
var_dump($movie_3);