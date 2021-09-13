<?php
    require_once("BaseClasses/Person.php");

    class Student extends Person {

        public $studentNumber;

        public function __construct($firstName, $lastName, $dateOfBirth, $studentNumber)
        {
            parent::__construct($firstName,$lastName,$dateOfBirth);

            $this->studentNumber = $studentNumber;
        }

        public function __toString()
        {
            $parentAsString = parent::__toString();

            return "Student:{
                StudentNumber: {$this->studentNumber},
                {$parentAsString}
            }";
        }


    }