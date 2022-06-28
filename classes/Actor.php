<?php

class Actor {
    public $name;
    public $surname;
    public $dateOfBirth;
    
    public function __construct(string $_name, string $_surname, string $_date_of_birth)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateOfBirth = $_date_of_birth;
    }
    
    public function getFullName(): string
    {
        return "{$this->name} {$this->surname}";
    }
}