<?php

class Movie
{
    public $title;
    public $original_language;
    public $genres;
    public $duration;
    public $year;
    public $plot;
    public $vote;

    // Quando il costruttore presenta tanti argomenti, come in questo caso, creare un array associativo e non far passare tutti gli argomenti dal costruttore
    public function __construct(string $_title, string $_original_language, array $_genres, int $_duration, int $_year, string $_plot, float $_vote)
    {
        $this->title = $_title;
        $this->original_language = $_original_language;
        $this->genres = $_genres;
        $this->duration = $_duration;
        $this->plot = $_plot;
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
