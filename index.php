<?php
class Movie {
    public $title;
    public $subTitle;
    public $plot;
    public $genre;
    public $vote;
    public $duration;
    public $releaseYear;

    function __construct(string $_title, ?string $_subTitle, $_vote, array $_genre)
    {
        $this->title = $_title;
        $this->subTitle = $_subTitle;
        $this->vote = $this->setVote($_vote);
        $this->genre = $_genre;
    }
    public function setVote($_vote){
        if( $_vote <= 5 ){
            return $this->vote =  "Scarso";
        } elseif( $_vote >= 6 && $_vote <= 7 ){
            return $this->vote = "Buono";
        } elseif( $_vote >= 7 && $_vote < 9 ){
            return $this->vote = "Ottimo";
        } else {
            return $this->vote = "Eccellente";
        }
    }
    // public function getVote(){
    //     return $this->vote;
    // }
}

$movie_1 = new Movie("Star Wars", "Episodio III - La vendetta dei Sith", 10, ["Azione, Fantascienza, Drammatico, Avventura"]);
$movie_1->plot = "Tre anni dopo lo scoppio delle guerre dei cloni tra la Repubblica Galattica e la Confederazione dei Sistemi Indipendenti, i capi dei separatisti, il Conte Dooku e il Generale Grievous, giungono a rapire il cancelliere supremo Palpatine e a sfidare le forze della Repubblica sui cieli di Coruscant.";
$movie_1->duration = "140 min";
$movie_1->releaseYear = 2005;
var_dump($movie_1);

$movie_2 = new Movie("Harry Potter", "L'ordine della fenice", 8, ["fantastico, avventura, drammatico, azione"]);
$movie_2->plot = "Harry Potter e l'Ordine della Fenice (titolo originale in inglese: Harry Potter and the Order of the Phoenix) è il quinto romanzo della saga high fantasy Harry Potter, scritta da J. K. Rowling e ambientata principalmente nell'immaginario Mondo magico durante gli anni novanta del XX secolo.";
$movie_2->duration = "137 min";
$movie_2->releaseYear = 2007;
var_dump($movie_2);

$movie_3 = new Movie("Sharknado", null, 2, ["azione, commedia, orrore, fantascienza"]);
$movie_3->plot = "Quando uno strano uragano colpisce Los Angeles, gli assassini piu' letali della natura governano il mare, la terra e l'aria. Migliaia di squali cominciano a terrorizzare la popolazione invasa dall'acqua";
$movie_3->duration = "86 min";
$movie_3->releaseYear = 2013;
var_dump($movie_3);