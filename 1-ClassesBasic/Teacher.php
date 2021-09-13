
<?php
/*Av den er farlig, teacher kan både være lære eller underviser, men det engelske sprog
mangler den nuance, er der et bedre ord?*/
class Teacher{
		//Det kunne se ud til at vi gentager meget af koden fra Student klassen.....
        public $firstName;
        public $lastName;
        public $dateOfBirth;
        public $FacultyNumber;

        public function __construct($firstName, $lastName, $dateOfBirth, $FacultyNumber)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateOfBirth = $dateOfBirth;
            $this->FacultyNumber = $FacultyNumber;
        }

    public function __toString() : string
    {
        return "Teacher:{
            Firstname:{$this->firstName},
            Lastname:{$this->lastName},
            DateOfBirth:{$this->dateOfBirth->format('Y-m-d H:i:s')},
            FacultyNumber:{$this->FacultyNumber}
        }";
    }


}