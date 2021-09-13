<?php

    class Teacher extends Person {
        private string $facultyNumber;

        public function __construct(
            string $firstName,
            string $lastName,
            DateTime $dateOfBirth,
            string $FacultyNumber)
        {
            parent::__construct($firstName,$lastName,$dateOfBirth);
            $this->facultyNumber = $FacultyNumber;
        }
        public function getFacultyNumber(): string
        {
            return $this->facultyNumber;
        }

        public function getAsHTMLTableData(): string
        {
            $partentHtml = parent::getAsHTMLTableData();

            return"
                {$partentHtml}
                <td>{$this->facultyNumber}</td>
            ";
        }

        public function getAsHTMLTableRow(): string
        {
           return"
                <tr>
                    {$this-> getAsHTMLTableData()}
                </tr>
           ";
        }


        public function __toString() : string
        {
            $parentAsString = parent::__toString();

            return "
                Teacher:{
                FacultyNumber:{$this->facultyNumber},
                {$parentAsString}
            }";
        }
    }