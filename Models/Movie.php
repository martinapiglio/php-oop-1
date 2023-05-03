<?php 

class Movie {
    public $title;
    public $releaseYear;
    public $director;
    public $length;
    public $genres;
    public $vote;

    public function setVote() {
        $this->vote = rand(1, 5);
    }

    function __construct(string $title, string $releaseYear, Director $director, string $length, array $genres) {
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->length = $length;
        $this->genres = $genres;
        $this->setVote();
    }
}

?>