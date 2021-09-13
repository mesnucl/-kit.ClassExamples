<?php
    class Course{

        public $courseId;
        public $subject;

        public function __construct($courseId, $subject)
        {
            $this->$courseId = $courseId;
            $this->subject = $subject;
        }

        public function __toString()
        {
            return "Course:{
                CourseId:{$this->courseId},
                Subject:{$this->subject}
            }";
        }


    }