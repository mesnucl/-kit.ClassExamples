<?php
    require_once("BaseClasses/Person.php");

    class Student extends Person {

        private string $studentNumber;

        public function __construct(
            string $firstName,
            string $lastName,
            DateTime $dateOfBirth,
            string $studentNumber)
        {
            parent::__construct($firstName,$lastName,$dateOfBirth);

            $this->studentNumber = $studentNumber;
        }

        public function __toString() : string
        {
            $parentAsString = parent::__toString();

            return "Student:{
                StudentNumber: {$this->studentNumber},
                {$parentAsString}
            }";
        }


    }