<?php
    require_once("BaseClasses/TimedEvent.php");

    class Session extends TimedEvent {

        public $room;
        public $course;
        public $students;
        public $teacher;

        public function __construct( $startDateTime, $endDateTime, $room, $course, $students,$teacher)
        {
            parent::__construct($startDateTime,$endDateTime);

            $this->room = $room;
            $this->course = $course;
            $this->students = $students;
            $this->teacher = $teacher;
        }

        public function __toString()
        {
            $parentAsString = parent::__toString();

            return "
                Session:{
                    {$parentAsString}
                    {$this->room},
                    {$this->course},
                    {$this->studentsAsString()},
                    {$this->teacher}
                    
                
                }";
        }
        private function studentsAsString():string{
           $studentsAsString = implode("\n",$this->students);

           return "Students:[
                {$studentsAsString}
            ]";
        }


    }