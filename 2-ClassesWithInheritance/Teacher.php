<?php
    require_once("BaseClasses/Person.php");

    class Teacher extends Person {
        public $FacultyNumber;

        public function __construct($firstName, $lastName, $dateOfBirth, $FacultyNumber)
        {
            parent::__construct($firstName,$lastName,$dateOfBirth);
            $this->FacultyNumber = $FacultyNumber;
        }

        public function __toString()
        {
            $parentAsString = parent::__toString();

            return "
                Teacher:{
                FacultyNumber:{$this->FacultyNumber},
                {$parentAsString}
            }";
        }
    }