<?php

    require("DependencyRoot.php");

    $course = new Course("CourseId1","System development 3");

    $classRoom = new ClassRoom("b1.18",30);

    $teacher = new Teacher("Martin","Nielsen",date_create("1985-05-19"),"FacultyNo32");



    $session = new Session(
        new DateTime('2021-09-13T08:15:00.000000Z'),
        new DateTime('2021-09-13T11:30:00.000000Z'),
        $classRoom,
        $course,
        $students,
        $teacher
    );

    echo $session->getSessionDurationInFullMinutes();

    /*echo $session;*/