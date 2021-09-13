<?php
    class Student{
        //Det kunne se ud til at vi gentager meget af koden fra Teacher klassen.....
        public $firstName;
        public $lastName;
        public $dateOfBirth;
        public $StudentNumber;

        public function __construct($firstName, $lastName, $dateOfBirth, $studNo)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateOfBirth = $dateOfBirth;
            $this->StudentNumber = $studNo;
        }

        public function __toString() : string
        {
            return "Student:{
                Firstname: {$this->firstName},
                Lastname:  {$this->lastName},
                dateOfBirth: {$this->dateOfBirth->format('Y-m-d H:i:s')},
                StudentNumber: {$this->StudentNumber}
            }";
        }


    }