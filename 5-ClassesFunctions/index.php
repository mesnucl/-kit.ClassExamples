<?php
    require("ClassRoom.php");
    require("Course.php");
    require("Teacher.php");
    require("Student.php");
    require("Session.php");

    $course = new Course("CourseId1","System development 3");

    $classRoom = new ClassRoom("b1.18",30);

    $teacher = new Teacher("Martin","Nielsen",date_create("1985-05-19"),"FacultyNo32");

    $students = array(
        new Student("Geralt","Of rivia",date_create("1950-11-11"),"studNo1"),
        new Student("Kim","kardashian",date_create("1983-09-24"),"studNo2"),
        new Student("John","Snow",date_create("2001-01-03"),"studNo3")
    );

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