<?php
    class Session{

        public $startDateTime;
        public $endDateTime;
        public $room;
        public $course;
        public $students;
        public $teacher;

        public function __construct( $startDateTime, $endDateTime, $room, $course, $students,$teacher)
        {
            $this->startDateTime = $startDateTime;
            $this->endDateTime = $endDateTime;
            $this->room = $room;
            $this->course = $course;
            $this->students = $students;
            $this->teacher = $teacher;
        }

        public function __toString()
        {
            return "
                Session:{
                    StartDate:{$this->startDateTime->format('Y-m-d H:i:s')},
                    EndDate:{$this->endDateTime->format('Y-m-d H:i:s')},
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