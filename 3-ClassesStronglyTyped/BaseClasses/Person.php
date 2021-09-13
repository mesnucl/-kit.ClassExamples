<?php
    abstract class Person{

        public string $firstName;
        public string $lastName;
        public $dateOfBirth;

        public function __construct( string $firstName,
                                     string $lastName,
                                     string $dateOfBirth)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateOfBirth = $dateOfBirth;
        }

        public function __toString()
        {
            return "Person:{
                Firstname: {$this->firstName},
                Lastname:  {$this->lastName},
                dateOfBirth: {$this->dateOfBirth->format('Y-m-d H:i:s')}
            }";
        }


    }
