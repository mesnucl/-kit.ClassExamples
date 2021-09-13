<?php
    class Course{

        private string $courseId;
        private string $subject;

        public function __construct(
            string $courseId,
            string $subject)
        {
            $this->courseId = $courseId;
            $this->subject = $subject;
        }

        public function __toString() : string
        {
            return "Course:{
                CourseId:{$this->courseId},
                Subject:{$this->subject}
            }";
        }


    }