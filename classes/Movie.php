<?php

class Movie {
    public $title;
    public $director;
    public $duration;
    public $genre;
    public $releaseYear;
    public $country;
    public $actors;
    public $plot;
    
    public function __construct(string $_title, int $_duration, int $_release_year, array $_actors = [])
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->releaseYear = $_release_year;
        $this->actors = $_actors;
    }
}