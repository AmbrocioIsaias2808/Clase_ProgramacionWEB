<?php

class Person{
    protected $name;
    protected $lastname;
    protected $DOB;

    public function __construct($name, $lastname, $DOB)
    {
        $this->name=$name;
        $this->lastname=$lastname;
        $this->DOB=$DOB;
    }

    public function walk(){

    }

    public function login(){

    }

    public function __toString()
    {
        return $this->name .' '. $this->lastname  . ' Nacio el: '. $this->DOB;
    }
}