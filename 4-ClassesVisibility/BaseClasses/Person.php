<?php
    abstract class Person{

        protected $firstName;
        protected $lastName;
        protected $dateOfBirth;

        public function __construct($firstName, $lastName, $dateOfBirth)
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
