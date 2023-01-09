<?php
class Movie {
    public $title;
    public $subTitle;
    public $plot;
    public $genre;
    public $vote;
    public $duration;
    public $releaseYear;

    function __construct(string $_title, ?string $_subTitle, $_vote, $_genre)
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
}