<?php 

class Movie {
    public $title;
    public $releaseYear;
    public $director;
    public $length;
    public $genre;
    public $vote;

    public function setVote() {
        $this->vote = rand(1, 5);
    }

    function __construct(string $title, string $releaseYear, string $director, string $length, string $genre) {
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->length = $length;
        $this->genre = $genre;
        $this->setVote();
    }
}

?>