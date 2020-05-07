<?php

class Student extends Person{

    protected $matricula;

    public function __construct($name, $lastname, $DOB, $matricula)
    {
        parent::__construct($name, $lastname, $DOB);
        $this->matricula=$matricula;
    }


    public function enrolToCurse(){

    }

    public function __toString()
    {
        return parent::__toString().' Matricula Escolar:'. $this->matricula;
    }
}