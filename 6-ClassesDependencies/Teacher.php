<?php

    class Teacher extends Person {
        private string $FacultyNumber;

        public function __construct(
            string $firstName,
            string $lastName,
            DateTime $dateOfBirth,
            string $FacultyNumber)
        {
            parent::__construct($firstName,$lastName,$dateOfBirth);
            $this->FacultyNumber = $FacultyNumber;
        }
        public function getFacultyNumber(): string
        {
            return $this->FacultyNumber;
        }

        public function __toString() : string
        {
            $parentAsString = parent::__toString();

            return "
                Teacher:{
                FacultyNumber:{$this->FacultyNumber},
                {$parentAsString}
            }";
        }
    }