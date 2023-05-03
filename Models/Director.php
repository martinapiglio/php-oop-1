<?php

class Director {
    public $name;
    public $surname;


    function __construct(string $name, string $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getFullDirectorName() {
        return "{$this->name} {$this->surname}";
    }

}