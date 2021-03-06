<?php

    class Session extends TimedEvent {

        private ClassRoom $room;
        private Course $course;
        private $students; //Students is an array but PHP does not support strongly typed array, how could we fix this?
        private Teacher $teacher;

        public function __construct(
            DateTime $startDateTime,
            DateTime $endDateTime,
            ClassRoom $room,
            Course $course,
            $students, //Students is an array but PHP does not support strongly typed array, how could we fix this?
            Teacher $teacher)
        {
            parent::__construct($startDateTime,$endDateTime);

            $this->room = $room;
            $this->course = $course;
            $this->students = $students;
            $this->teacher = $teacher;
        }

        public function __toString() : string
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