<?php
    abstract class Person{

        protected string $firstName;
        protected string $lastName;
        protected  DateTime $dateOfBirth;

        public function __construct($firstName, $lastName, $dateOfBirth)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateOfBirth = $dateOfBirth;
        }
        public function getFirstName() : string
        {
            return $this->firstName;
        }
        public function setFirstName($firstName): void
        {
            $this->firstName = $firstName;
        }
        public function getLastName() : string
        {
            return $this->lastName;
        }
        public function setLastName($lastName): void
        {
            $this->lastName = $lastName;
        }
        public function getFullName() : string
        {
            return "{$this->firstName} {$this->lastName}";
        }
        public function getAge() : int
        {
            $today = new DateTime();
            $differenceInDateInterval = $this->dateOfBirth->diff($today);
            $differenceInYears = $differenceInDateInterval->y; //At bare navngive en property 'y' er dårlig skik. Den burde havde heddet 'Years' eller ligende.
            return $differenceInYears;
        }

        public function getAsHTMLTableData():string{
            return "
                <td>{$this->firstName}</td>
                <td>{$this->lastName}</td>
                <td>{$this->dateOfBirth->format('Y-m-d')}</td>
            ";
        }
        public function getAsHTMLTableRow():string{
            return "
              <tr>
                {$this->getAsHTMLTableData()}
              </tr>  
            ";
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
